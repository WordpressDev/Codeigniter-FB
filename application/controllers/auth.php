<?php if (!defined('BASEPATH')) exit('No direct script access');

class Auth extends CI_Controller {

  function __construct() {
    parent::__construct();
  }
  
  function index() {
    $user = $this->facebook->getUser();
    if (!$user) {
      redirect('auth/login');
    } else {
      redirect($this->config->item('fb_canvasUrl'));
    }
  }
  
  function login() {
    // generate allow application url by using facebook sdk
    // more scope information : 
    $params = array(
        'scope' => 'publish_stream,user_photos,email,offline_access,read_stream',
        'redirect_uri' => site_url()
    );
    $login_url = $this->facebook->getLoginUrl($params);
    redirect($login_url, 'refresh');
  }
  
  function logout() {
    // destroy session and redirect
    session_destroy();
    
    $params = array(
      'next' => site_url()
    );
    $logout_url = $this->facebook->getLogoutUrl($params);
    redirect($logout_url, 'refresh');
  }
  
  function success() {
    // ping facebook php sdk before redirect
    // prevent $this->facebook->getUser return 0 after redirect
    $user = $this->facebook->getUser();
    redirect($this->config->item('fb_canvasUrl'));
  }
}