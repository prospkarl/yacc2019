<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

  /**
	 * getall function.
	 *
	 * @access public
	 * @param mixed $table
	 * @param mixed $id
	 * @return object all row object
	 */

     public function gethere($key, $value){
       $this->db->select('*');
       $this->db->from('users');
       $this->db->where($key, $value);
       return $this->db->get()->result();
     }


  	public function getData($table,$where=array(),$select='',$join=[],$jointype='',$group='',$order=[],$limit=0,$offset=0,$having=[]){
  			$this->db->from($table);
  			if (!empty($select)) {
  				$this->db->select($select);
  			}
        if(!empty($where)){
          if(count($where)>0){
            foreach ($where as $key => $value){
              $this->db->where($key, $value);
            }
          }else{
            $this->db->where($where[0]);
          }

        }
        if(!empty($join)){
          foreach ($join as $key => $value){
            if($jointype!=''){
              $this->db->join($key,$value,$jointype);
            }else{

              $this->db->join($key,$value);
            }

          }
        }
        if(!empty($group)){
          $this->db->group_by($group);
        }
        if(!empty($having)){
          if(count($having)>1){
            foreach ($having as $key => $value){
              $this->db->where($key, $value);
            }
          }else{
            $this->db->having($having[0]);
          }

        }
        if(!empty($order)){
          foreach ($order as $key => $value){
            $this->db->order_by($key, $value);
          }
        }
        if(!empty($limit)){
          $this->db->limit($limit,$offset);
        }
  			return $this->db->get()->result();
  	}

    // datatable
  	public function getDataTables($table,$where=[],$select='',$join=[],$jointype='',$group='',$order=[],$limit=0,$offset=0,$having=[],$like = array(),$or_like = array()){
      $this->db->select($select);
      $this->db->from($table);
      if(!empty($join)){
        foreach ($join as $key => $value){
          $this->db->join($key,$value,$jointype);
        }
      }
      if(!empty($where)){
        foreach ($where as $key => $value){
          $this->db->where($key, $value);
        }
      }
      if(!empty($group)){
        $this->db->group_by($group);
      }
      if(!empty($having)){
        if(count($having)>1){
          foreach ($having as $key => $value){
            $this->db->where($key, $value);
          }
        }else{
          $this->db->having($having[0]);
        }

      }
      if(!empty($order)){
        foreach ($order as $key => $value){
          $this->db->order_by($key, $value);
        }
      }
      if($limit != 0){
        $this->db->limit($value, $offset);
      }
      if(!empty($like)){
        foreach ($like as $key => $value){
          $this->db->like($key, $value);
        }
      }
      if(!empty($or_like)){
        $this->db->group_start();
          foreach ($or_like as $key => $value){
            $this->db->or_like($key, $value);
          }
    		$this->db->group_end();
      }

      return $this->db->get()->result();

    }

    public function insertData($from, $data){
  		if($this->db->insert($from, $data))
  			return $this->db->insert_id();
  		else
  			return 0;
  	}

    public function updateData($from, $data, $where = array()) {
  		$this->db->where($where);
  		return $this->db->update($from, $data);
  	}

    public function deleteData($from, $where = array()){
      return $this->db->delete($from, $where);
    }

    public function num_of_exams($from){
      $this->db->select('COUNT(*) as count');
      $this->db->from($from);
      $query = $this->db->get();
      if ($query->num_rows() > 0 )
      {
        $row = $query->row();
        return $row->count;
      }
      return 0;
    }

    public function num_rows($from, $where = array()){
      $this->db->select('COUNT(*) as count');
      $this->db->from($from);
      $this->db->where($where);
      $query = $this->db->get();
      if ($query->num_rows() > 0 )
      {
        $row = $query->row();
        return $row->count;
      }
      return 0;
    }

    public function get_id($id, $from, $where=array()){
      $this->db->select($id);
      $this->db->from($from);
      $this->db->where($where);
      return $this->db->get()->result();
    }


}
