<?php 
 
class M_groupa extends CI_Model{
    function tampil_tabel_group(){
        $this->db->where('id_level NOT IN (3)');
        return $this->db->get('level');
    }
    function tambah($data){
        $this->db->insert('level',$data);
        return TRUE;
    }
    function ubah($where,$data,$table){
        $this->db->update($table,$data,$where);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
