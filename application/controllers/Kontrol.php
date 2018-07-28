<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontrol extends CI_Controller {
	public function index()
	{
		$this->load->model('m_kontrol');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		$database['babymonitoring'] = $this->m_kontrol->kontrol();
		
		
		
		$this->load->view('v_kontrol',$database);
	}

	public function getDataMonitoring() {
		$data = $this->m_kontrol->kontrol();
		echo json_encode($data[0]);
	}

	

	public function updatesuhu(){
		$this->load->model('m_kontrol');
		$database['suhu'] = md5($this->input->post('GantiPassword'));
		$showUserName = $this->session->userdata("nama");
		$this->db->update('admin', $data, "user_name = '$showUserName'");
		header('location: '.base_url().'Beranda');
	}
}
