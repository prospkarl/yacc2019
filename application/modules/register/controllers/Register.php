<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->login_template('register');
	}

	public function dashboard()
	{
		echo "YOU HAVE SUCCESSFULLY LOGGED IN!";
	}

	public function reguser()
	{
		$setData = $this->input->post();

		$required = array('full_name', 'nick_name', 'email', 'contact_no', 'birth_date', 'church', 'image');

		$errors = validate_required_fields($setData, $required);

		if (!empty($errors)) {
			ajax_response('warning', 'Missing Fields!', 'Please input missing fields', $errors);
		}

		$setData['date_registered'] = date('Y-m-d');

		$insert_id = $this->My_Model->insert('tbl_campers', $setData);

		if ($insert_id) {
			$update = array(
				'picture' => $this->upload_picture()
			);

			$where = array(
				'id' => $insert_id
			);

			$this->My_Model->update('tbl_campers', $update, $where);

			ajax_response('success', 'Success', 'You are registered! Wait for further instructions.');
		} else {
			ajax_response('error', 'Oops!', 'Something went wrong!');
		}
	}


	public function upload_picture()
	{
		$config['upload_path']          = FCPATH . '/uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 9999999999;
		$config['max_width']            = 9999999999;
		$config['max_height']           = 9999999999;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('picture')) {
			$error = array('error' => $this->upload->display_errors());

			ajax_response('error', 'Oops!', 'Something Went Wrong!',  $this->upload->display_errors());
		} else {
			return $this->upload->data()['file_name'];
		}
	}
}
