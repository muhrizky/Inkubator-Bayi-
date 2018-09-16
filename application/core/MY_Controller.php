<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_login');
        
    }
    

    public function cekLogin()
    {
        # code...
        if (!$this->session->userdata('status')) {
            redirect(base_url("login"));
        }
        // else{
        //     $where = array(
        //         'User_Name' => $this->session->userdata('nama')
        //     );
        //     $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        //     if(cek < 1){
        //         redirect(base_url("login/logout"));
        //     }
        // }
    }
    public function getUserData()
    {
        // Ambil semua data session
        $data_session = $this->session->userdata();
        return $data_session;
        # code...
    }
    public function isAdmin()
    {
        //mengambil data session
        $data_session =$this->getUserData();
        // jika level user bukan operator
        //maka redirect ke halaman 404
        # code...
        if ($this->session->userdata('jabatan') !== 'Operator') show_404();
        
    }
    

}

/* End of file Controllername.php */
