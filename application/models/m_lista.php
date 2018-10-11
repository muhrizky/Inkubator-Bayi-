<?php 
 
class M_lista extends CI_Model{
    function tampil_tabel_admin(){
        $this->db->from('admin');
        $this->db->join('level', 'admin.jabatan = level.id_level', "LEFT");
        // $this->db->where('admin.jabatan NOT IN (3)');
        return $this->db->get();
}
    function tambah($data){
        $this->db->insert('admin', $data);
        return TRUE;
    }
    function ubah($where,$data,$table){
        $this->db->update($table,$data,$where);
        
    }
    function ubahpassword($where,$data,$table){
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
}
