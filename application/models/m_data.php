<?php 
 
class M_data extends CI_Model{
    function tampil_tabel_sensor(){
        return $this->db->get('babymonitoring');
}
}


