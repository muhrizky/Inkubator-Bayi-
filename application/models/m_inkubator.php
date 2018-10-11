<?php 
 
class M_inkubator extends CI_Model{
    function tampil_tabel_inkubator(){
        // $this->db->where('id_level NOT IN (3)');
        return $this->db->get('datainkubator');
    }
    function tambah($data){
        $this->db->insert('datainkubator',$data);
        return TRUE;
    }
    function ubah($where,$data,$table){
        $this->db->update($table,$data,$where);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table); // bagaimana menghalau untuk id 3 operator tidak bisa
    }
    
}