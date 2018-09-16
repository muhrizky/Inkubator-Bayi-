<?php 
 
class M_data extends CI_Model{
    function data($number,$offset){
		return $query = $this->db->order_by('no', 'desc')->get('babymonitoring2',$number,$offset)->result();		
	}

    function tampil_tabel_sensor(){
         return $this->db->get('babymonitoring2')->num_rows();
        // $this->db->select()->order_by('no', 'desc');
        
    }
    function get_range_data($tgl_awal, $tgl_akhir)
    {
        
        $query = $this->db->query("SELECT TIME(waktu) as waktu,Suhu FROM babymonitoring2 WHERE waktu BETWEEN '$tgl_awal' AND '$tgl_akhir'");// SUM(suhu_sementara)
        return $query->result();
    }           
     
    

}


