<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda extends MY_Controller {

	
    public function __construct()
    {
        parent::__construct();
		$this->cekLogin();
    }
	
	public function index()
	{
		//  var_dump($this->session->userdata());
		//  die();
		
		$this->load->model('m_beranda');
		$this->load->model('m_groupa');
		$this->load->model('m_lista');
		$namauser = $this->session->userdata('nama');
		$id = $this->session->userdata('id');
		
		$database['getgroup'] = $this->m_groupa->tampil_tabel_group()->result();
		$database['admin'] = $this->m_beranda->getadminid($id);
		$database['getNama'] = $database['admin'][0]->User_Name;
		$database['babymonitoring2'] = $this->m_beranda->monitoring();
		// $database['babymonitoring'] = $this->m_beranda->monitoring();

		//get data suhu
		$database['database']=$this->m_beranda->get_data_suhu(date('Y-m-d'));
		
		
		$database['getPhoto'] = $this->m_lista->get_photo($database['getNama']);
		$this->load->view('v_beranda',$database);
	}

	public function getDataMonitoring() {
		$data = $this->m_beranda->monitoring();
		echo json_encode($data[0]);
	}

	// public function updatesvsuhu(){
	// 	$this->load->model('m_beranda');
	// 	$post = $this->input->post(null, true);
	// 	$data = array(
	// 		"svsuhu" => $post['svsuhu']
	// 	);
	// 	$this->m_kontrol->updatesvsuhu(1, $data);
	// 	$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Set point Suhu berhasil di inputkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	// 	redirect('beranda'); 

	// }
	public function getDataSuhu($tanggal)
	{
		$data = $this->m_beranda->get_data_suhu($tanggal);
		echo json_encode($data);
	}

	
}
