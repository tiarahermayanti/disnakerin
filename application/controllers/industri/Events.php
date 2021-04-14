<?php
class Events extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_events','m_events');
        $this->load->library('upload');
	}

	function index(){
		$x['events']=$this->m_events->get_all_events();
		$this->load->view('industri/v_industri_event',$x);
	}

	function simpan_events(){
		$config['upload_path'] = './event/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);

	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./event/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 1920;
	                        $config['height']= 980;
	                        $config['new_image']= './event/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
							$deskripsi=htmlspecialchars($this->input->post('xdeskripsi',TRUE),ENT_QUOTES);
							$jadwal=htmlspecialchars($this->input->post('xjadwal',TRUE),ENT_QUOTES);
							$alamat=htmlspecialchars($this->input->post('xalamat',TRUE),ENT_QUOTES);
							$kuota=htmlspecialchars($this->input->post('xkuota',TRUE),ENT_QUOTES);

							$this->m_events->simpan_events($nama,$deskripsi, $jadwal, $alamat, $kuota, $gambar);
							redirect('industri/events');
							
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('industri/events');
	                }
	                 
	            }    else{
	            	echo $this->session->set_flashdata('msg','warning');
	                    redirect('industri/events');
	            }
               
				
	}

	function update_events(){
		$config['upload_path'] = './event/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);

	            if(!empty($_FILES['filefoto2']['name']))
	            {
	                if ($this->upload->do_upload('filefoto2'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./event/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 1920;
	                        $config['height']= 980;
	                        $config['new_image']= './event/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $kode=$this->input->post('xkode');
	                        $nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
							$deskripsi=htmlspecialchars($this->input->post('xdeskripsi2',TRUE),ENT_QUOTES);
							$jadwal=htmlspecialchars($this->input->post('xjadwal2',TRUE),ENT_QUOTES);
							$alamat=htmlspecialchars($this->input->post('xalamat2',TRUE),ENT_QUOTES);
							$kuota=htmlspecialchars($this->input->post('xkuota2',TRUE),ENT_QUOTES);

							$this->m_events->update_events($kode,$nama,$deskripsi, $jadwal, $alamat, $kuota, $gambar);
							redirect('industri/events');
							
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('industri/events');
	                }
	                 
	            }    else{
	            	$gambar=$this->input->post('xgambar2');
	                $kode=$this->input->post('xkode');
	                $nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
					$deskripsi=htmlspecialchars($this->input->post('xdeskripsi2',TRUE),ENT_QUOTES);
					$jadwal=htmlspecialchars($this->input->post('xjadwal2',TRUE),ENT_QUOTES);
					$alamat=htmlspecialchars($this->input->post('xalamat2',TRUE),ENT_QUOTES);
					$kuota=htmlspecialchars($this->input->post('xkuota2',TRUE),ENT_QUOTES);

					$this->m_events->update_events($kode,$nama,$deskripsi, $jadwal, $alamat, $kuota, $gambar);
					redirect('industri/events');
	            }
		
		$nama=htmlspecialchars($this->input->post('xnama2',TRUE),ENT_QUOTES);
		$jadwal=htmlspecialchars($this->input->post('xjadwal2',TRUE),ENT_QUOTES);
		
	}

	function hapus_events(){
		$kode=$this->input->post('kode');
		$this->m_events->hapus_events($kode);
		redirect('industri/events');
	}

	function getValidasiEvent(){
		$data['join'] = $this->m_events->getValidasiEvent();
		$this->load->view('industri/v_validasi_event', $data);
	}

	function validEvent(){
        $kode=$this->uri->segment(4);   
        $this->m_events->validEvent($kode);
        redirect('industri/events/getValidasiEvent');
  }

  function listTamu(){
        $kode=$this->uri->segment(4);   
        $data['tamu'] = $this->m_events->listTamu($kode);
        $this->load->view('industri/v_list_tamu', $data);
  }

function indexToday(){
		$x['events']=$this->m_events->get_all_events();
		$this->load->view('industri/v_event_today',$x);
	}

  function today(){
  	$kode=$this->uri->segment(4); 
    $data['today'] = $this->m_events->today($kode);
    $this->load->view('industri/v_list_today', $data);
        
  }

  function hadir(){
  		$id=$this->uri->segment(4); 
       $kode=$this->uri->segment(5); 
        $this->m_events->hadir($kode);
        $data['today'] = $this->m_events->today($id);
	    $this->load->view('industri/v_list_today', $data);
  }

  function tidakHadir(){
  	$id=$this->uri->segment(4); 
       $kode=$this->uri->segment(5); 
         $this->m_events->tidakHadir($kode);
        $data['today'] = $this->m_events->today($id);
	    $this->load->view('industri/v_list_today', $data);
  }
}