<?php 
 
class M_monitoring extends CI_Model{
 public function monitoring(){
		$this->db->order_by('no', 'desc');
		$this->db->limit(1);
		$data = $this->db->get('babymonitoring')->row();
		return $data;	
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
	function get_data_bb(){
        $query = $this->db->query("SELECT waktu,SUM(bb) AS Berat_Badan  FROM babymonitoring WHERE no GROUP BY waktu");
        
        if($query->num_rows() > 0){
            foreach($query->result() as $database){
                $hasil[] = $database;
            }
            return $hasil;
        }
    }		


}