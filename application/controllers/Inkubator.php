<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inkubator extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->cekLogin();
		$this->isAdmin();
    }
    public function index()
	{
		
		$this->load->model('m_inkubator');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		$database['datainkubator'] = $this->m_inkubator->tampil_tabel_inkubator()->result();
		$database['getPhoto'] = $this->m_lista->get_photo($database['getNama']);
        $this->load->view('v_inkubator',$database);
	}
	public function tambah_inkubator(){
		$this->form_validation->set_rules('nama_inkubator', 'nama_inkubator', 'required|is_unique[datainkubator.nama_inkubator]',array('required' => 'level harus ada','is_unique' => 'nama level tidak boleh sama' ));
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> nama inkubator sudah dibuat, gunakan nama inkubator lain <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('inkubator','refresh');
			
		}
		$data = array(
			'nama_inkubator' => $this->input->post('nama_inkubator')
		);
		$this->m_inkubator->tambah($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('inkubator');
	}
	public function ubah_inkubator(){
		$this->form_validation->set_rules('nama_inkubator', 'nama_inkubator', 'required|is_unique[datainkubator.nama_inkubator]',array('required' => 'level harus ada','is_unique' => 'nama level tidak boleh sama' ));
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> nama inkubator sudah dibuat, gunakan nama inkubator lain <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('inkubator','refresh');
			
		}
		$database['nama_inkubator'] = $this->input->post('nama_inkubator');
		$id = $this->input->post('id_inkubator');
		
		$this->m_inkubator->ubah("id_inkubator='$id'",$database,'datainkubator');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('inkubator');
	}
	public function hapus_inkubator($id){
		$where = array('id_inkubator'=> $id);
		$this->m_inkubator->hapus_data($where, 'datainkubator');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('inkubator');
	}
}