<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda extends CI_Controller {
	
	
	public function index()
	{
		$this->load->model('m_beranda');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		$database['admin'] = $this->m_beranda->admin($namauser);
		$database['babymonitoring'] = $this->m_beranda->monitoring();

		//get data suhu
		$database['database']=$this->m_beranda->get_data_suhu();
		
		
		
		$this->load->view('v_beranda',$database);
	}

	public function getDataMonitoring() {
		$data = $this->m_beranda->monitoring();
		echo json_encode($data[0]);
	}

}
