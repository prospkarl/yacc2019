<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends MY_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$this->template('admin');
  }

	public function dashboard(){
		echo "YOU HAVE SUCCESSFULLY LOGGED IN!";
	}



}
