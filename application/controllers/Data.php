<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/html2pdf/html2pdf.class.php';
use Restserver\Libraries\REST_Controller;
class Data extends MY_Controller {

	
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
    }
    
    
	public function index()
	{
		$this->load->model('m_data');
		$namauser = $this->session->userdata('nama');
        $database['getNama'] = $this->session->userdata('nama');
        $database['getinkubator'] = $this->m_inkubator->tampil_tabel_inkubator()->result();
        $database['getPhoto'] = $this->m_lista->get_photo($database['getNama']);
		$tampil_tabel_sensor = $this->m_data->tampil_tabel_sensor();
		$this->load->library('pagination');
		
		$config['base_url'] = base_url().'data/index/page/';
		$config['total_rows'] = $tampil_tabel_sensor; // belum dynamic  masih dicari bagaiaman mengubahnya menjadi dynamic
		$config['per_page'] = 10;
		$config['full_tag_open'] = '<ul class="pagination pull-right">';
        $config['full_tag_close'] ='</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li class="page-item">';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</li>';
 
        $config['first_link']='Pertama';
        $config['last_link']='Terahir';
        $config['next_link']='>';
        $config['prev_link']='<';
        $config['attributes'] = array('class' => 'page-link');
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);
		$database['babymonitoring2'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('v_data',$database);
    }
    public function getRangeData($tgl_awal,$tgl_akhir)
    {
        $data = $this->m_data->get_range_data($tgl_awal,$tgl_akhir);
        echo json_encode($data);
    }
    public function unduhdata()
    {
        
        $waktu_awal = $this->input->get('waktu_awal');
        $waktu_akhir = $this->input->get('waktu_akhir');
        $inkubator  = $this->input->get('inkubator');
        $this->load->database();
        $inkubatorresult = $this->db->query("SELECT * FROM databayi JOIN datainkubator ON databayi.inkubator = datainkubator.id_inkubator WHERE databayi.inkubator = $inkubator");
        $result = $this->db->query("SELECT waktu, suhu,lembab,bb FROM babymonitoring2 WHERE waktu BETWEEN '$waktu_awal' AND '$waktu_akhir'");
        $babymonitoring2 = array(
            'waktu_awal' => 'waktu',
            'waktu_akhir' => 'waktu',
            'babymonitoring2' => $result,
            'inkubatorresult' => $inkubatorresult,
            'getNama' => $this->session->userdata('nama_lengkap')
            // 'getnamalengkap' => $this->m_data->ambiladmin()->result()
        );
        
        $this->load->view('v_unduhpdf',$babymonitoring2);
       
    }
    // function unduhdata2()
    // {
    //     $id = $this->session->userdata('id');
    //     $babymonitoring2['admin'] = $this->m_data->getadminid($id);
    //     $babymonitoring2['getNama'] = $babymonitoring2['admin'][0]->User_Name;
    //     $this->load->view('v_unduhpdf');
    // }
        
    }
	

	
	
