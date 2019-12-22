<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{
	public function __construct(){
		if ($this->session->logged_in) {
			redirect('admin');
		}
		parent::__construct();
	}

	public function index() {
		$this->login_template('index');
  }

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($username == 'admin' && $password == 'yaccgravity') {
			$setSession = array(
				'logged_in' =>	true
			);

			$this->session->set_userdata($setSession);
		}else {
			$this->session->set_flashdata('error', 'Incorrect password');
		}

		redirect('login');
	}

}
