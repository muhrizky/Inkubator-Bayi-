<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Monitoring extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->cekLogin();
		
	}
	
	public function index()
	{
		$this->load->model('m_monitoring');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		$database['babymonitoring2'] = $this->m_monitoring->monitoring();
		

		//get data suhu
		$database['database']=$this->m_monitoring->get_data_suhu(date('Y-m-d'));
		//get data beratbadan
		$database['database2']=$this->m_monitoring->get_data_bb(date('Y-m-d'));
		$database['getPhoto'] = $this->m_lista->get_photo($database['getNama']);
		$this->load->view('v_monitoring',$database);
	}

	public function getDataMonitoring() {
		$data = $this->m_monitoring->monitoring();
		echo json_encode($data[0]);
	}

	public function getDataSuhu($tanggal)
	{
		$data = $this->m_monitoring->get_data_suhu($tanggal);
		echo json_encode($data);
		# code...
	}
	public function getDatabb($tanggal)
	{
		$data = $this->m_monitoring->get_data_bb($tanggal);
		echo json_encode($data);
		# code...
	}
}
