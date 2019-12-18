<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller {

    public function __construct(){
      $this->load->model('My_Model');

  		$this->load->library('form_validation');
  		$this->form_validation->CI =& $this;
    }

    public function template($view='', $data=array()){
      $this->load->view('header');
      $this->load->view($view, $data);
			$this->load->view('footer');
    }
    
    public function login_template($view='', $data=array()){
      $this->load->view('login_head');
      $this->load->view($view, $data);
      $this->load->view('login_footer');
    }

    public function admin_template($view='', $data=array()){
      $this->load->view($view, $data);
    }

    public function user_template($view='', $data=array()){
      $this->load->view('header');
      $this->load->view('user_nav');
      $this->load->view($view, $data);
			$this->load->view('footer');
    }

    public function view_users(){
      if (!$this->session->userdata('user_id')) {
  			redirect(base_url('login'));
  		}
  		if ($this->session->userdata('type')==0) {
  			redirect(base_url('users'));
  		}
      $where = array('type' => '0');
      $data['result'] = $this->My_Model->getData('users',$where);
      $this->admin_template('view_users',$data);
    }

    public function stud_view_users(){
      if (!$this->session->userdata('user_id')) {
  			redirect(base_url('login'));
  		}
  		if ($this->session->userdata('type')==1) {
  			redirect(base_url('admin'));
  		}
      $where = array('type' => '0');
      $data['result'] = $this->My_Model->getData('users',$where);
      $this->user_template('view_users',$data);
    }

}
