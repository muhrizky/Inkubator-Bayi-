<?php 
 
class M_monitoring extends CI_Model{
 public function monitoring(){
		$this->db->order_by('no', 'desc');
		$this->db->limit(1);
		$data = $this->db->get('babymonitoring2')->row();
		return $data;	
	}
	function get_data_suhu($tanggal){
        $waktu_awal = $tanggal.' 00:00:00.000000';
        $waktu_akhir = $tanggal.' 23:59:59.999999';
        $query = $this->db->query("SELECT TIME(waktu) as waktu,Suhu FROM babymonitoring2 WHERE waktu BETWEEN '$waktu_awal' AND '$waktu_akhir'");
        return $query->result();
    }
    
	function get_data_bb($tanggal){
       $waktu_awal = $tanggal.' 00:00:00.000000';
        $waktu_akhir = $tanggal.' 23:59:59.999999';
        $query = $this->db->query("SELECT TIME(waktu) as waktu,bb FROM babymonitoring2 WHERE waktu BETWEEN '$waktu_awal' AND '$waktu_akhir'");
        return $query->result();
    }		


}