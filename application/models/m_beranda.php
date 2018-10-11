<?php 
 
class M_beranda extends CI_Model{
	function tampil_tabel_bayi(){
        $this->db->from('databayi');
        $this->db->join('datainkubator', 'databayi.inkubator = datainkubator.id_inkubator', "LEFT");
        // $this->db->where('admin.jabatan NOT IN (3)');
        return $this->db->get();
	}
	function tambah($data){
        $this->db->insert('databayi', $data);
        return TRUE;
    }
    function ubah($where,$data,$table){
        $this->db->update($table,$data,$where);
        
	}
	function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
	}
	public function get_photo($username)
    {
        $this->db->select('photo');
        $this->db->where('User_Name', $username);
        return $this->db->get('admin')->result()[0]->photo;
    }


	// function admin($namauser){
		
	// 	$this->db->from('admin');
	// 	$this->db->join('level', 'admin.jabatan = level.id_level', "LEFT");
	// 	$this->db->where('admin.User_Name', $namauser);
	// 	$data = $this->db->get();
	// 	return $data->result();
		
	// }
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
	
	// function get_data_suhu($tanggal){
	// 	$waktu_awal = $tanggal.' 00:00:00.000000';
	// 	$waktu_akhir = $tanggal.' 23:59:59.999999';
    //     $query = $this->db->query("SELECT TIME(waktu) as waktu,suhu FROM babymonitoring2 WHERE (MOD(MINUTE(waktu),3) = 0) AND waktu BETWEEN '$waktu_awal' AND '$waktu_akhir'");// SUM(suhu_sementara)
    //     return $query->result();
		
    //     // if($query->num_rows() > 0){
    //     //     foreach($query->result() as $database){
    //     //         $hasil[] = $database;
    //     //     }
    //     //     return $hasil;
    //     // }
	// }	

	// // public function updatesvsuhu($id, $data) {
	// // 	$this->db->where('id_kontrol', $id);
	// // 	$this->db->update('beranda', $data);
	// // }
	


}