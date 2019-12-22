<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
	public function __construct()
	{
    if (!$this->session->logged_in) {
      redirect('login');
    }
		parent::__construct();
	}

	public function index(){
		$data['total_registered'] = $this->My_Model->getRows('tbl_campers', [], 'count');
		$data['groups'] = $this->My_Model->getRows('tbl_groups');

		$get_camper_options['where'] = array(
			'date_registered' => date('Y-m-d')
		);

		$data['registered'] = $this->My_Model->getRows('tbl_campers', $get_camper_options, 'count');
		$this->template('index', $data);
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('login');
	}

	public function edit(){
		$setData = $this->input->post();

		$where = array( 'id' => $setData['id'] );
		unset($setData['id']);

		$update = $this->My_Model->update('tbl_campers', $setData, $where);

		if ($update) {
			ajax_response('success', 'Success!', 'Successfully Updated!');
		}else {
			ajax_response('error', 'Oops!', 'Something went wrong!');
		}
	}

	public function getusers() {
		// print_data($_POST);
		$column_order = array('id', 'full_name', 'nick_name', 'age', 'birth_date', 'church', 'tbl_groups.group_name', 'paid' );
		$join = array(
			'tbl_groups' => 'tbl_groups.group_id = tbl_campers.group'
		);
		$limit = $this->input->post('length');
		$offset = $this->input->post('start');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$data = $this->My_Model->get_datatables('tbl_campers', $column_order, $select = "*", $where = "", $join, $limit, $offset, $search, $order, $group = '');

		echo json_encode($data);
	}

	public function camperinfo($id){
		$query_options['select'] = '
			id,
			full_name,
			nick_name,
			birth_date,
			age,
			church,
			province,
			tbl_groups.group_name as group,
			baptized,
			baptized as baptizedval,
			paid,
			paid as paidval,
			picture,
			date_registered,
			additional_info
		';

		$query_options['where'] = array('id' => $id);
		$query_options['join'] = array(
			'tbl_groups' => 'tbl_groups.group_id = tbl_campers.group'
		);

		$camperinfo = $this->My_Model->getRows('tbl_campers', $query_options, 'row');

		ajax_response('success', 'data', 'camper info', $camperinfo);
	}
}
