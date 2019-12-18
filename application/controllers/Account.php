<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
  protected $home;

  public function __construct(){
    parent::__construct();
    $this->load->library('Home');
  }

	public function index(){
    echo "test";
	}

  public function test(){
    echo "test afa";
    $this->check();
	}


}
