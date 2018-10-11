<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Groupa extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->cekLogin();
		$this->isAdmin();
		$this->load->model('m_kontrol');
	}
	
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if ($this->session->userdata('jabatan')!=='Operator'){
			
	// 		redirect('beranda');
			
	// 	}
	// }
	
	public function index()
	{
		
		$this->load->model('m_groupa');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		$database['level'] = $this->m_groupa->tampil_tabel_group()->result();
		$database['getPhoto'] = $this->m_lista->get_photo($database['getNama']);
        $this->load->view('v_groupa',$database);
	}
	public function tambah_group(){
		$this->form_validation->set_rules('level', 'level', 'required|is_unique[level.level]',array('required' => 'level harus ada','is_unique' => 'nama level tidak boleh sama' ));
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> nama level sudah dibuat, gunakan nama level lain <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('groupa','refresh');
			
		}
		$data = array(
			'level' => $this->input->post('level')
		);
		$this->m_groupa->tambah($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('groupa');
	}
	public function ubah_group(){
		$this->form_validation->set_rules('level', 'level', 'required|is_unique[level.level]',array('required' => 'level harus ada','is_unique' => 'nama level tidak boleh sama' ));
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> nama level sudah dibuat, gunakan nama level lain <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('groupa','refresh');
			
		}
		$database['level'] = $this->input->post('level');
		$id = $this->input->post('id_level');
		
		$this->m_groupa->ubah("id_level='$id'",$database,'level');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('groupa');
	}
	public function hapus_level($id){
		$where = array('id_level'=> $id);
		$this->m_groupa->hapus_data($where, 'level');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('groupa');
	}
}
