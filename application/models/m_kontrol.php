<?php 
 
class M_kontrol extends CI_Model{
   function kontrol(){
		$this->db->order_by('no', 'desc');
		$this->db->limit(1);
		$data = $this->db->get('babymonitoring2');
		return $data->result();	
	}
	public function updatesvsuhu($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('pastibisa2', $data);
	}
	public function updatesvlembab($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('pastibisa2', $data);
	}
	function tampil_tabel_kontrol(){
        return $this->db->get('pastibisa2');
	}
	function notifikasi_setpoint($svsuhu, $svkelembapan, $data)
	{
		$this->db->select('suhu');
		$this->db->select('nilai');

		
	}

    


}