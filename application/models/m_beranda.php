<?php 
 
class M_beranda extends CI_Model{	
	function admin($namauser){
		$this->db->select('jabatan');
		$this->db->select('alamat');
		$this->db->select('no_hp');
		
		$this->db->from('admin');
		$this->db->where('admin.User_Name', $namauser);
		$data = $this->db->get();
		return $data->result();
		
	}

	function monitoring(){
		$this->db->order_by('no', 'desc');
		$this->db->limit(1);
		$data = $this->db->get('babymonitoring');
		return $data->result();	
	}
	
	function get_data_suhu(){
        $query = $this->db->query("SELECT waktu,SUM(suhu_sementara) AS Suhu FROM babymonitoring WHERE no GROUP BY waktu");
        
        if($query->num_rows() > 0){
            foreach($query->result() as $database){
                $hasil[] = $database;
            }
            return $hasil;
        }
	}	
	


}