<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data extends CI_Controller {
	public function index()
	{
		$this->load->model('m_data');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		
		$database['babymonitoring'] = $this->m_data->tampil_tabel_sensor()->result();
		
		
		
		$this->load->view('v_data',$database);
	}
}