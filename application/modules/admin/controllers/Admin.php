<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$data['total_registered'] = $this->My_Model->getRows('tbl_campers', [], 'count');

		$get_camper_options['where'] = array(
			'date_registered' => date('Y-m-d')
		);

		$data['registered'] = $this->My_Model->getRows('tbl_campers', $get_camper_options, 'count');
		$this->template('index', $data);
	}

	public function getusers()
	{ 
		// print_data($_POST);
		$column_order = array('id', 'full_name', 'nick_name','birth_date', 'church', 'group', 'paid' );
		$limit = $this->input->post('length');
		$offset = $this->input->post('start');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$data = $this->My_Model->get_datatables('tbl_campers', $column_order, $select = "*", $where = "", $join = array(), $limit, $offset, $search, $order, $group = '');
	
		echo json_encode($data);
	}

	public function camperinfo($id){
		$query_options['select'] = 'full_name, nick_name, birth_date, church, group, baptized, paid, date_registered, additional_info';
		$query_options['where'] = array('id' => $id);
		$camperinfo = $this->My_Model->getRows('tbl_campers', $query_options, 'row');
		

		ajax_response('success', 'data', 'camper info', $camperinfo);
	}
}
