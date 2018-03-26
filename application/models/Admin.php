<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Model
{
	//fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }

	//fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
	
	//fungsi ini digunakan melakukan create, update, dan delete yang nantinya akan dipanggil di controller
	function crud($table, $key, $id, $arr){
			$oper=$this->input->post('oper');
			$id_=$this->input->post($id);
			$count=count($arr);
		for($i=0;$i<$count;$i++){
			$data[$arr[$i]]=$this->input->post($arr[$i]);
	 
			switch ($oper) {
			case 'add':
			$this->db->insert($table,$data);
			break;
			case 'edit':
			$this->db->where($key,$id_);
			$this->db->update($table, $data);
			break;
			case 'del':
			$this->db->where($key,$id_);
			$this->db->delete($table);
			break;
			}
		}
	}
}