<?php 
 
class M_kontrol extends CI_Model{
   function kontrol(){
		$this->db->order_by('no', 'desc');
		$this->db->limit(1);
		$data = $this->db->get('babymonitoring');
		return $data->result();	
    }
    


}