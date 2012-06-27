<?php if (!defined('BASEPATH')) exit('No direct script access');

class Tab extends CI_Controller {

  function __construct() {
    parent::__construct();
  }
  
  function index() {
    $this->template->write_view('content', 'tab');
    $this->template->render();
  }
}