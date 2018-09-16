<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	public function getjabatan($namauser, $password){
		$this->db->select('level');

		$this->db->select('jabatan');
		$this->db->join('level', 'admin.jabatan = level.id_level', "LEFT");
		$this->db->where('admin.User_Name', $namauser);
		$this->db->where('admin.Password', md5($password));
		$this->db->from('admin');
		$data = $this->db->get();
		return $data->result();
	}
	
}