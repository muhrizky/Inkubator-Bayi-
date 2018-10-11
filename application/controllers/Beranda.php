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
		
		$this->load->model('m_beranda');
		$namauser = $this->session->userdata('nama');
		$id = $this->session->userdata('id');
		$database['getNama'] = $this->session->userdata('nama');
		$database['getinkubator'] = $this->m_inkubator->tampil_tabel_inkubator()->result();
		$database['getPhoto'] = $this->m_beranda->get_photo($database['getNama']);
		$database['databayi'] = $this->m_beranda->tampil_tabel_bayi()->result();
		
		$this->load->view('v_beranda',$database);
	}


	public function tambah_bayi(){
		$this->form_validation->set_rules('inkubator', 'inkubator', 'required|is_unique[databayi.inkubator]',array('required' => 'Inkubator sudah dipilih','is_unique' => 'Inkubator sudah dipilih' ));
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Inkubator sudah digunakan, gunakan inkubator lain <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('beranda','refresh');
			
		}
		$config['upload_path'] = './assets/production/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name'] = $this->input->post('namabayi');
		$config['encrypt_name'] = TRUE;
		$config['file_ext_tolower'] = true;
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> ' .$error['error']. ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('beranda');
		}
		else
		{
			$data = array(
						'namabayi' => $this->input->post('namabayi'),
						'jenis_kelamin' => $this->input->post('jenis_kelamin'),
						'tanggallahir' => $this->input->post('tanggallahir'),
						'persalinan' => $this->input->post('persalinan'),
						'inkubator' => $this->input->post('inkubator'),
						'namaorangtua' => $this->input->post('namaorangtua'),
						'alamat' => $this->input->post('alamat'),
						'photo' => $this->upload->data('file_name')
					);
			$this->m_beranda->tambah($data);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('beranda');
		}

		
	}
	public function ubah_bayi(){
		$config['upload_path'] = './assets/production/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name'] = $this->input->post('namabayi');
		$config['encrypt_name'] = TRUE;
		$config['file_ext_tolower'] = true;
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		$photo = $_FILES["userfile"]['name'];
		if ( $photo !='' && !$this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> ' .$error['error']. ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('beranda');
		}
		else
		{
			
			// $this->form_validation->set_rules('inkubator', 'inkubator', 'required|is_unique[databayi.inkubator]',array('required' => 'Inkubator sudah dipilih','is_unique' => 'Inkubator sudah dipilih' ));
			// if ($this->form_validation->run() == FALSE)
			// {
			// 	$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Inkubator sudah digunakan, gunakan inkubator lain <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			// 	redirect('beranda','refresh');
				
			// }	
			$database['namabayi'] = $this->input->post('namabayi');
			$database['jenis_kelamin']=$this->input->post('jenis_kelamin');
			$database['tanggallahir']=$this->input->post('tanggallahir');
			$database['persalinan']=$this->input->post('persalinan');
			$database['inkubator']=$this->input->post('inkubator');
			$database['namaorangtua']=$this->input->post('namaorangtua');
			$database['alamat']=$this->input->post('alamat');
			if ( $photo !='')$database['photo']= $this->upload->data('file_name');
			$id = $this->input->post('id_bayi');
				
			$this->m_lista->ubah("id_bayi='$id'",$database,'databayi');
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect($_SERVER['HTTP_REFERER']);	
		}
	}
	
	public function hapus_bayi($id){
		$where = array('id_bayi' => $id);
		$this->m_lista->hapus_data($where, 'databayi');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		 redirect('beranda');
	}
	
// 	public function index()
// 	{
// 		//  var_dump($this->session->userdata());
// 		//  die();
		
// 		$this->load->model('m_beranda');
// 		$this->load->model('m_groupa');
// 		$this->load->model('m_lista');
// 		$namauser = $this->session->userdata('nama');
// 		$id = $this->session->userdata('id');
		
// 		$database['getgroup'] = $this->m_groupa->tampil_tabel_group()->result();
// 		$database['admin'] = $this->m_beranda->getadminid($id);
// 		$database['getNama'] = $database['admin'][0]->User_Name;
// 		$database['admin'] = $this->m_beranda->tampil_tabel_bayi()->result();
// 		$database['babymonitoring2'] = $this->m_beranda->monitoring();
// 		// $database['babymonitoring'] = $this->m_beranda->monitoring();

// 		//get data suhu
// 		$database['database']=$this->m_beranda->get_data_suhu(date('Y-m-d'));
		
		
// 		$database['getPhoto'] = $this->m_lista->get_photo($database['getNama']);
// 		$this->load->view('v_beranda',$database);
// 	}

	public function getDataMonitoring() {
		$data = $this->m_beranda->monitoring();
		echo json_encode($data[0]);
	}

// 	// public function updatesvsuhu(){
// 	// 	$this->load->model('m_beranda');
// 	// 	$post = $this->input->post(null, true);
// 	// 	$data = array(
// 	// 		"svsuhu" => $post['svsuhu']
// 	// 	);
// 	// 	$this->m_kontrol->updatesvsuhu(1, $data);
// 	// 	$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Set point Suhu berhasil di inputkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
// 	// 	redirect('beranda'); 

// 	// }
// 	public function getDataSuhu($tanggal)
// 	{
// 		$data = $this->m_beranda->get_data_suhu($tanggal);
// 		echo json_encode($data);
// 	}

	
//  }
}