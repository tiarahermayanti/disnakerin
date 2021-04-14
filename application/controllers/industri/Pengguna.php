<?php
class Pengguna extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('M_pengguna');
	}

	function index(){
		$x['pengguna']=$this->M_pengguna->get_where_pengguna();

		$this->load->view('industri/v_pengguna',$x);
	}

	function simpan_pengguna(){

		$config['upload_path'] = './assets/images/'; //path folder
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
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 1920;
	                        $config['height']= 980;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$nama=htmlspecialchars($this->input->post('xnama',TRUE),ENT_QUOTES);
							$jenkel=htmlspecialchars($this->input->post('xjenkel',TRUE),ENT_QUOTES);
							$email=htmlspecialchars($this->input->post('xemail',TRUE),ENT_QUOTES);
							$nohp=htmlspecialchars($this->input->post('xnohp',TRUE),ENT_QUOTES);
							$moto=htmlspecialchars($this->input->post('xmoto',TRUE),ENT_QUOTES);
							$tentang=htmlspecialchars($this->input->post('xtentang',TRUE),ENT_QUOTES);
							$this->m_events->simpan_events($nama,$jenkel, $email, $nohp, $moto, $tentang, $gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('industri/pengguna');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('industri/pengguna');
	                }
	                 
	            }else{
					redirect('industri/pengguna');
				}

	}

	function hapus_pengguna(){
		$kode=$this->input->post('kode');
		$this->M_pengguna->hapus_pengguna($kode);
		redirect('industri/pengguna');
	}

}