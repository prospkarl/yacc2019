<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printid extends MY_Controller {
	public function __construct() {
    if (!$this->session->logged_in) {
      redirect('login');
    }
		parent::__construct();
	}

	public function index(){
		$for_printing_op['where'] = array( 'printed' => 0 );
		$for_printing_op['join'] = array(
			'tbl_groups' => 'tbl_campers.group = tbl_groups.group_id'
		);
		$for_printing = $this->My_Model->getRows('tbl_campers', $for_printing_op);

		$data['for_printing'] = $for_printing;

		$this->template('index', $data);
	}

	public function p() {
		$campers = $this->input->get('print');
		$campers = explode('-', $campers);

		$print_op['select'] = 'full_name, church, province, picture, group_name';
		$print_op['join'] = array(
			'tbl_groups' => 'tbl_campers.group = tbl_groups.group_id'
		);

		foreach ($campers as $key => $value) {
			// UPDATE PRINTED
			// $set = array( 'printed' => 1 );
			// $where = array( 'id' => $value );
			//
			// $this->My_Model->update('tbl_campers', $set, $where);

			$print_op['or_like'][] = array(
				'id' => $value
			);
		}

		$print = $this->My_Model->getRows('tbl_campers', $print_op);

		$data['print'] = $print;
		$this->clear_template('print', $data);
	}
}
