<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lista extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->cekLogin();
		$this->isAdmin();
		
	}
	

	public function index()
	{
		$this->load->model('m_lista');
		
		$this->load->model('m_groupa');
		
		
		$namauser = $this->session->userdata('nama');
		$id = $this->session->userdata('id');
		
		$database['admin'] = $this->m_beranda->getadminid($id);
		$database['getNama'] = $database['admin'][0]->User_Name;
		$database['getgroup'] = $this->m_groupa->tampil_tabel_group()->result();
		$database['admin'] = $this->m_lista->tampil_tabel_admin()->result();
		
		$database['getPhoto'] = $this->m_lista->get_photo($database['getNama']);
        	$this->load->view('v_lista',$database);
	}
	public function tambah_admin(){
		$this->form_validation->set_rules('User_Name', 'UserName', 'required|is_unique[admin.User_Name]',array('required' => 'Username harus ada','is_unique' => 'Username tidak boleh sama' ));
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Username sudah dibuat, gunakan username lain <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('lista','refresh');
			
		}
		$config['upload_path'] = './assets/production/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name'] = $this->input->post('User_Name');
		$config['encrypt_name'] = TRUE;
		$config['file_ext_tolower'] = true;
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> ' .$error['error']. ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('lista');
		}
		else
		{
			$data = array(
						'User_Name' => $this->input->post('User_Name'),
						'Password' =>md5($this->input->post('Password')),
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'jabatan' => $this->input->post('jabatan'),
						'no_hp' => $this->input->post('no_hp'),
						'alamat' => $this->input->post('alamat'),
						'photo' => $this->upload->data('file_name')
					);
			$this->m_lista->tambah($data);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('lista');
		}

		
	}
	public function ubah_admin(){
		
		
		$config['upload_path'] = './assets/production/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name'] = $this->input->post('User_Name');
		$config['encrypt_name'] = TRUE;
		$config['file_ext_tolower'] = true;
		$config['overwrite'] = true;

		$this->load->library('upload', $config);
		$photo = $_FILES["userfile"]['name'];
		if ( $photo !='' && !$this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> ' .$error['error']. ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('lista');
		}
		else
		{
			// $this->form_validation->set_rules('User_Name', 'UserName', 'required|is_unique[admin.User_Name]',array('required' => 'Username harus ada','is_unique' => 'Username tidak boleh sama' ));
			// if ($this->form_validation->run() == FALSE)
			// {
			// $this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Username sudah dibuat, gunakan username lain <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			// redirect('lista','refresh');
			
			// }
			$database['User_Name'] = $this->input->post('User_Name');
			$database['nama_lengkap']= $this->input->post('nama_lengkap');
			$database['jabatan']=$this->input->post('jabatan');
			$database['no_hp']=$this->input->post('no_hp');
			$database['alamat']=$this->input->post('alamat');
			if ( $photo !='')$database['photo']= $this->upload->data('file_name');
			$id = $this->input->post('id');
				
			$this->m_lista->ubah("id='$id'",$database,'admin');
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect($_SERVER['HTTP_REFERER']);	
		}
		
		
	}
	public function hapus_admin($id){
		$where = array('id' => $id);
		$this->m_lista->hapus_data($where, 'admin');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		 redirect('lista');
	}
	public function updatepassword(){
		$database['Password']= md5($this->input->post('Password'));
		$id = $this->input->post('id');
		$this->m_lista->ubahpassword("id='$id'",$database,'admin');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Password Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('lista');
	}
}
