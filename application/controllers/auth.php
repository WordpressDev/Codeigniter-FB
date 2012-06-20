<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Auth extends CI_Controller {

  function __construct() {
    parent::__construct();
  }
  
  function index() {
  
  }
  
  function login() {
    $params = array(
        'scope' => 'publish_stream,user_photos,email,offline_access,read_stream',
        'redirect_uri' => site_url()
    );
    redirect($this->facebook->getLoginUrl($params));
  }
  
  function logout() {
    session_destroy();
    
    $params = array(
      'next' => site_url()
    );
    redirect($this->facebook->getLogoutUrl($params));
  }
}