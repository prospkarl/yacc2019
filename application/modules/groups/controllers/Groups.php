<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Groups extends MY_Controller
{
	public function __construct()
	{
    if (!$this->session->logged_in) {
      redirect('login');
    }
		parent::__construct();
	}

	public function index(){
		$groups = $this->My_Model->getRows('tbl_groups');

		foreach ($groups as $key => $value) {
			$leader_op['select'] = 'full_name';
			$leader_op['where'] = array(
				'id' => $value['leader']
			);

			$leader = $this->My_Model->getRows('tbl_campers', $leader_op, 'row');

			if (!empty($leader)) {
				$leader = $leader->full_name;
			}else {
				$leader = 'Not Set';
			}

			$group_count_op['select'] = 'id, full_name';
			$group_count_op['where'] = array(
				'group' => $value['group_id']
			);
			$group_count = $this->My_Model->getRows('tbl_campers', $group_count_op, 'count');
			$members  = $this->My_Model->getRows('tbl_campers', $group_count_op);

			$groups[$key]['count'] = $group_count;
			$groups[$key]['members'] = $members;
			$groups[$key]['leader_name'] = $leader;
		}

		$data['groups'] = $groups;

		$this->template('index', $data);
	}

	public function add() {
		$setData = $this->input->post();

		$insert_id = $this->My_Model->insert('tbl_groups', $setData);

		if ($insert_id) {
			$this->session->set_flashdata('success', 'Group added successfully!');
		}else {
			$this->session->set_flashdata('error', 'Something went wrong!');
		}
		redirect('groups');
	}

	public function edit() {
		$post = $this->input->post();

		$setGroupWhere = array(
			'group_id' => $post['group_id']
		);

		$setGroupData = array(
			'group_name' => $post['group_name'],
			'leader' => $post['leader'],
		);

		$update = $this->My_Model->update('tbl_groups', $setGroupData, $setGroupWhere);

		if ($update) {
			$this->session->set_flashdata('success', 'Successfully Updated!');
		}else {
			$this->session->set_flashdata('error', 'Something went wrong!');
		}
		redirect('groups');
	}

	public function groupInfo($group_id) {
		$group_op['where'] = array(
			'group_id' => $group_id
		);

		$group = $this->My_Model->getRows('tbl_groups', $group_op, 'row');
		$data['groupInfo'] = $group;

		$members_op['select'] = 'id, full_name';
		$members_op['where'] = array(
			'group' => $group_id
		);

		$members = $this->My_Model->getRows('tbl_campers', $members_op);
		$data['groupMembers'] = $members;
	 	echo json_encode($data);
	}
}
