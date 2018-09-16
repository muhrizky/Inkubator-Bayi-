<?php 
 
class M_beranda extends CI_Model{	
	function admin($namauser){
		
		$this->db->from('admin');
		$this->db->join('level', 'admin.jabatan = level.id_level', "LEFT");
		$this->db->where('admin.User_Name', $namauser);
		$data = $this->db->get();
		return $data->result();
		
	}
	public function getadminid($id)
	{
		$this->db->from('admin');
		$this->db->join('level', 'admin.jabatan = level.id_level', "LEFT");
		$this->db->where('admin.id', $id);
		$data = $this->db->get();
		
		return $data->result();
	}

	function monitoring(){
		$this->db->order_by('no', 'desc');
		$this->db->limit(1);
		$data = $this->db->get('babymonitoring2');
		// $data = $this->db->get('babymonitoring2');
		return $data->result();	
	}
	
	function get_data_suhu($tanggal){
		$waktu_awal = $tanggal.' 00:00:00.000000';
		$waktu_akhir = $tanggal.' 23:59:59.999999';
        $query = $this->db->query("SELECT TIME(waktu) as waktu,Suhu FROM babymonitoring2 WHERE waktu BETWEEN '$waktu_awal' AND '$waktu_akhir'");// SUM(suhu_sementara)
        return $query->result();
		
        // if($query->num_rows() > 0){
        //     foreach($query->result() as $database){
        //         $hasil[] = $database;
        //     }
        //     return $hasil;
        // }
	}	

	// public function updatesvsuhu($id, $data) {
	// 	$this->db->where('id_kontrol', $id);
	// 	$this->db->update('beranda', $data);
	// }
	


}