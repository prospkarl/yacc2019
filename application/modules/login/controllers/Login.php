<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$this->template('index');
  }

	public function auth(){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
	}

}
