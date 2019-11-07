<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$this->login_template('register');
  }

	public function dashboard(){
		echo "YOU HAVE SUCCESSFULLY LOGGED IN!";
	}



}
