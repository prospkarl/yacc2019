<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->template('index');
	}

	public function getusers()
	{ 
		// print_data($_POST);
		$column_order = array('id', 'full_name', 'nick_name', 'age', 'church' );
		$limit = $this->input->post('length');
		$offset = $this->input->post('start');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$data = $this->My_Model->get_datatables('tbl_campers', $column_order, $select = "*", $where = "", $join = array(), $limit, $offset, $search, $order, $group = '');
	
		echo json_encode($data);
	}
}
