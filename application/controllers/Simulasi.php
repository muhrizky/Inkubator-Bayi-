<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Simulasi extends CI_Controller {
	public function index()
	{
		$this->load->model('m_simulasi');
		$namauser = $this->session->userdata('nama');
		$database['getNama'] = $this->session->userdata('nama');
		
		
		
		$this->load->view('v_simulasi',$database);
	}
}
