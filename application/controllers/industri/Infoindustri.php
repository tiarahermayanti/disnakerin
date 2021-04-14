<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infoindustri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_industri','ikm');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');		
		$this->load->view('industri/v_infoindustri');
	}

	public function ajax_list()
	{
		$list = $this->ikm->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $ikm) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $ikm->NAMA_PERUSAHAAN;
			$row[] = $ikm->ALAMAT;
			$row[] = $ikm->KELURAHAN;
			$row[] = $ikm->KECAMATAN;
			$row[] = $ikm->PIMPINAN;
			$row[] = $ikm->BENTUK_USAHA;
			$row[] = $ikm->TIPE_INDUSTRI;
			$row[] = $ikm->KBLI;
			$row[] = $ikm->JENIS_PRODUK;

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->ikm->count_all(),
						"recordsFiltered" => $this->ikm->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

}
