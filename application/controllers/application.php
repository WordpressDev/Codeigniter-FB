<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Application extends CI_Controller {

  function __construct() {
    parent::__construct();
  }
  
  
  function index() {
    $this->template->write_view('content', 'application');
    $this->template->render();    
  }

}