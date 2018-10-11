<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontrol extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->cekLogin();
		$this->isAdmin();
		
	}
	

	
// public function __construct()
//{
//	parent::__construct();
//	if ($this->session->userdata('status')!= "login") {
//		redirect(base_url("login"));
//	}
//	$this->load->model('m_groupa');
//	$showUserName = $this->m_data->getAdmin($showUserName);

//	if($getAdmin[0]->id_level ==0 || $getAdmin[0]->id_level ==1 || $getAdmin[0]->id_level ==2){

//	}else{

// } 
// redirect(base_url("beranda"));
// }

//}


	public function index()
	{
		$this->load->model('m_kontrol');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		$database['babymonitoring2'] = $this->m_kontrol->kontrol();
		$database['pastibisa2'] = $this->m_kontrol->tampil_tabel_kontrol()->result();
		
		$database['getPhoto'] = $this->m_lista->get_photo($database['getNama']);
		$this->load->view('v_kontrol',$database);
	}

	public function getDataMonitoring() {
		$data = $this->m_kontrol->kontrol();
		echo json_encode($data[0]);
	}
	public function updatesvsuhu2(){
		$this->load->model('m_kontrol');
		$post = $this->input->post(null, true);
		$data = array(
			"nilai" => $post['nilai']
		);
		$this->m_kontrol->updatesvsuhu(1, $data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Set point Suhu berhasil di inputkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('kontrol'); 

	}
	public function updatesvlembab2(){
		$this->load->model('m_kontrol');
		$post = $this->input->post(null, true);
		$data = array(
			"nilai" => $post['nilai']
		);
		$this->m_kontrol->updatesvlembab(2, $data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Set point Kelembapan berhasil di inputkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('kontrol'); 

	}
	

	


//	public function updatesvlembab(){
//		$this->load->model('m_kontrol');
//		$post = $this->input->post(null, true);
//		$data = array(
//			"svlembab" => $post['svlembab']
			
//		);
//		$this->m_kontrol->updatesvlembab(1, $data);
//		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Set point Kelembapan berhasil di inputkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
//		redirect('kontrol'); 

//	}
//	public function updatesvsuhu(){
//		$this->load->model('m_kontrol');
//		$post = $this->input->post(null, true);
//		$data = array(
//			"svsuhu" => $post['svsuhu']
//		);
//		$this->m_kontrol->updatesvsuhu(1, $data);
//		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Set point Suhu berhasil di inputkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
//		redirect('kontrol'); 

//	}
	
	
	
}
