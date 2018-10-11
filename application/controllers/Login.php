<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller {
	function __construct(){
		parent::__construct();		
		
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('v_login2');
	}

	public function aksi_login(){
		
		$User_Name = $this->input->post('User_Name');
		$Password = $this->input->post('Password');
		
		$where = array(
			'User_Name' => $User_Name,
			'Password' => md5($Password)
			);

		$a = $this->m_login->cek_login("admin",$where)->result();
		$nama_l = $this->m_login->cek_login("admin", $where)->result();
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		$result = $this->m_login->getjabatan($User_Name,$Password);
		
		// var_dump($result[0]->level);
		// die();		
		if($cek > 0){

			$data_session = array(
				'nama' => $User_Name,
				'nama_lengkap' => $nama_l[0]->nama_lengkap,
				'jabatan' =>$result[0]->level,
				'id' => $a[0]->id,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('Welcome','<div class="alert alert-success" role="alert"> Selamat datang di Portal Sistem Pengendali Inkubator Bayi Laboratorium Teknik Kontrol Otomat Departemen Teknik Elektro Universitas Diponegoro <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect(base_url("beranda")); //dahulu ("login")

		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Username atau password salah ! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	
}
