<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Monitoring extends CI_Controller {
	public function index()
	{
		$this->load->model('m_monitoring');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		$database['babymonitoring'] = $this->m_monitoring->monitoring();
		

		//get data suhu
		$database['database']=$this->m_monitoring->get_data_suhu();
		//get data suhu
		$database['database2']=$this->m_monitoring->get_data_bb();
		
		$this->load->view('v_monitoring',$database);
	}

	public function getDataMonitoring() {
		$data = $this->m_monitoring->monitoring();
		echo json_encode($data[0]);
	}
}
