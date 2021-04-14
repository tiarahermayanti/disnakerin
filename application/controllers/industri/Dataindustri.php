<?php
class Dataindustri extends CI_Controller{
  function __construct(){
    parent::__construct();
      if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
      $this->load->library('datatables'); //load library ignited-dataTable
      $this->load->model('M_dataindustri'); //load model M_dataindustri
      $this->load->model('M_events');
      $this->load->library('upload');
  }
  function index(){
      //$x['category']=$this->M_dataindustri->get_category();
      $this->load->view('industri/v_industri');
  }
 
  function get_industri_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_dataindustri->get_all_industri();
  }


//-----------------------------------------
  
  function hapus_dataindustri(){ //delete record method
    $idikm=$this->input->post('idikm');
    $kode=$this->input->post('kode');    
    $this->M_dataindustri->hapusdata_industri($idikm);
    //----
    redirect('industri/dataindustri/hasil/'.$kode);
  }

  function hasil(){
        $kode=$this->uri->segment(4);   
        $data['data']=$this->M_dataindustri->tampil_industri($kode);
        $data['dataikm']=$this->M_dataindustri->tampil_dataindustri($kode);
        $data['joinevent']=$this->M_events->get_join_event_ikm($kode);
        $this->load->view('industri/v_dataindustri',$data);
  }

//------------------------------------------

  function get_pelatihan_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_dataindustri->get_all_pelatihan();
  }
  
  public function tampilpelatihan(){
      $idikm = $this->input->post('idikm');
      $data['idikm'] = $idikm;
      $idikm=$data['idikm'];
      $this->load->view('industri/v_tambahpelatihan',$data);
  }

  public function search(){
        //--
        $idikm = $this->input->post('idikm');
        $keyword = $this->input->post('keyword');
        if($keyword==''){
                $idikm = $this->input->post('idikm');
                $data['idikm'] = $idikm;
                $idikm=$data['idikm'];
                redirect('industri/dataindustri/hasil/'.$idikm);
        }
        else {
                $data['data']=$this->M_dataindustri->get_keyword($keyword);
                $data['keyword']=$keyword;
                $data['idikm']=$idikm;
                $this->load->view('industri/v_tambahpelatihan',$data);
        }
  }

 

  function tambah_datapelatihan(){
      $idikm=$this->input->post('idikm');
      $idbantuan = $this->input->post('idbantuan');
      $tahun = $this->input->post('xtahun');
      $this->M_dataindustri->tambahdata_pelatihan($idikm,$idbantuan,$tahun);

                $data['idikm'] = $idikm;
                $idikm=$data['idikm'];
                 //--
                //$idikm = $this->input->post('idikm');
                $keyword = $this->input->post('keyword');
                $data['keyword']=$keyword;                
                $data['data']=$this->M_dataindustri->get_keyword($keyword);
                //$data['idikm']=$idikm;
                $this->load->view('industri/v_tambahpelatihan',$data);
  }

  function refresh(){
            //--
                $idikm = $this->input->post('idikm');
                redirect('industri/dataindustri/hasil/'.$idikm);
  }

//--------------------------------

function info(){
        $kode=$this->uri->segment(4);   
        $data['data']=$this->M_dataindustri->tampil_industri($kode);
        $data['energi']=$this->M_dataindustri->getEnergi($kode);
        $data['bb']=$this->M_dataindustri->getBahanBaku($kode);
        $data['legalitas']=$this->M_dataindustri->getLegalitas($kode);
        $data['peralatan']=$this->M_dataindustri->getPeralatan($kode);
        $data['produksi']=$this->M_dataindustri->getProduksi($kode);
        $data['pemasaran']=$this->M_dataindustri->getPemasaran($kode);
        $this->load->view('industri/v_perindustri',$data);
  }

 //--------------------------------- Rekap --------------------------
   function rekapindustripelatihan(){
      //$x['category']=$this->M_dataindustri->get_category();
      $this->load->view('industri/v_rekapindustri_pelatihan');
  }
 
  function get_rekapindustripelatihan_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_dataindustri->get_all_rekapindustripelatihan();
  }

  function getValidasiIkm(){
    $data['ikm'] = $this->M_dataindustri->getValidasiIkm();
    $this->load->view('industri/v_validasi_industri',$data);
  }

  function valid(){
        $kode=$this->uri->segment(4);   
        $this->M_dataindustri->validIkm($kode);
        $this->M_dataindustri->validPengguna($kode);
        redirect('industri/dataindustri/getValidasiIkm');
  }

function infoValid(){
        $kode=$this->uri->segment(4);   
        $data['data']=$this->M_dataindustri->tampil_industri($kode);
        $this->load->view('industri/v_info_valid',$data);
  }

  function maps(){
    $koor['data']=$this->M_dataindustri->getkoordinat();
     $this->load->library('googlemaps');
            $config=array();
            $config['center']="-0.9128475000000053, 100.34930078125004";
            $config['zoom']=17;
            $config['map_height']="400px";
            $this->googlemaps->initialize($config);
            foreach ($koor['data']->result() as $key) {
              $latlng = $key->KOORDINAT;
              $namaper = $key->NAMA_PERUSAHAAN;
              $marker=array();
              $marker['position']=$latlng;
              $marker['title'] = $namaper;  
              $this->googlemaps->add_marker($marker);
            }
            
            $data['map']=$this->googlemaps->create_map();
       
    $this->load->view('industri/v_maps', $data);
  }

  function insertIkm(){
    $data['bentukusaha']=$this->M_dataindustri->getBentukUsaha();
    $data['direktori']=$this->M_dataindustri->getDirektori();
    $data['kecamatan']=$this->M_dataindustri->getKecamatan();
    
        $this->load->view('industri/v_insert_industri', $data);
  }
  
function getKbli(){
        $id = $this->input->post('id',TRUE);
        $data = $this->M_dataindustri->getKbli($id);
        echo json_encode($data);

    }

    function getKelurahan(){
        $id = $this->input->post('id',TRUE);
        $data = $this->M_dataindustri->getKelurahan($id);
        echo json_encode($data);
    }

    function simpan_industri(){
      $config['upload_path'] = './upload/'; //path folder
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
                          $config['source_image']='./upload/'.$gbr['file_name'];
                          $config['create_thumb']= FALSE;
                          $config['maintain_ratio']= FALSE;
                          $config['quality']= '60%';
                          $config['width']= 1920;
                          $config['height']= 980;
                          $config['new_image']= './upload/'.$gbr['file_name'];
                          $this->load->library('image_lib', $config);
                          $this->image_lib->resize();

                          $gambar=$gbr['file_name'];
                          $nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
                          $pimpinan=htmlspecialchars($this->input->post('pimpinan',TRUE),ENT_QUOTES);
                          $bentukusaha=htmlspecialchars($this->input->post('bentukusaha',TRUE),ENT_QUOTES);
                          $kbli=htmlspecialchars($this->input->post('kbli',TRUE),ENT_QUOTES);
                          $kelurahan=htmlspecialchars($this->input->post('kelurahan',TRUE),ENT_QUOTES);
                          $alamat=htmlspecialchars($this->input->post('alamat',TRUE),ENT_QUOTES);
                          $tlp=htmlspecialchars($this->input->post('tlp',TRUE),ENT_QUOTES);
                          $legalitas=htmlspecialchars($this->input->post('legalitas',TRUE),ENT_QUOTES);
                          $tahun=htmlspecialchars($this->input->post('tahun',TRUE),ENT_QUOTES);
                          $jenis=htmlspecialchars($this->input->post('jenis',TRUE),ENT_QUOTES);

              $this->M_dataindustri->simpan_industri($kbli, $kelurahan, $bentukusaha, $nama, $pimpinan, $alamat, $tlp, $tahun, $jenis, $legalitas, $gambar);
              redirect('industri/dataindustri');
              
          }else{
                      echo $this->session->set_flashdata('msg','warning');
                      redirect('industri/dataindustri');
                  }
                   
              }    else{
                echo $this->session->set_flashdata('msg','warning');
                      redirect('industri/dataindustri');
              }
    }

    function simpan_bahanbaku(){
       $idikm=htmlspecialchars($this->input->post('idikm',TRUE),ENT_QUOTES);
       $nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
       $jenis=htmlspecialchars($this->input->post('jenis',TRUE),ENT_QUOTES);
       $sumber=htmlspecialchars($this->input->post('sumber',TRUE),ENT_QUOTES);
       $jumlah=htmlspecialchars($this->input->post('jumlah',TRUE),ENT_QUOTES);
       $nilai=htmlspecialchars($this->input->post('nilai',TRUE),ENT_QUOTES);
       $tahun=htmlspecialchars($this->input->post('tahun',TRUE),ENT_QUOTES);
       $this->M_dataindustri->simpan_bahanbaku($idikm, $nama, $jenis, $sumber, $jumlah, $nilai, $tahun);
        redirect('industri/dataindustri/info/' . $idikm);
    }

    function simpan_energi(){
       $idikm=htmlspecialchars($this->input->post('idikm',TRUE),ENT_QUOTES);
       $nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
       $jenis=htmlspecialchars($this->input->post('jenis',TRUE),ENT_QUOTES);
       $pemakaian=htmlspecialchars($this->input->post('pemakaian',TRUE),ENT_QUOTES);
       $kebutuhan=htmlspecialchars($this->input->post('kebutuhan',TRUE),ENT_QUOTES);

       $this->M_dataindustri->simpan_energi($idikm, $jenis, $pemakaian, $kebutuhan);
        redirect('industri/dataindustri/info/' . $idikm);
    }

    function simpan_legalitas(){
       $idikm=htmlspecialchars($this->input->post('idikm',TRUE),ENT_QUOTES);
       $nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
       $jenis=htmlspecialchars($this->input->post('jenis',TRUE),ENT_QUOTES);
       $instansi=htmlspecialchars($this->input->post('instansi',TRUE),ENT_QUOTES);
       $noizin=htmlspecialchars($this->input->post('noizin',TRUE),ENT_QUOTES);

       $this->M_dataindustri->simpan_legalitas($idikm, $nama, $instansi, $noizin);
        redirect('industri/dataindustri/info/' . $idikm);
    }

    function simpan_peralatan(){
       $idikm=htmlspecialchars($this->input->post('idikm',TRUE),ENT_QUOTES);
       $nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
       $merek=htmlspecialchars($this->input->post('merek',TRUE),ENT_QUOTES);
       $tahun=htmlspecialchars($this->input->post('tahun',TRUE),ENT_QUOTES);
       $negara=htmlspecialchars($this->input->post('negara',TRUE),ENT_QUOTES);
       $spesifikasi=htmlspecialchars($this->input->post('spesifikasi',TRUE),ENT_QUOTES);
       $jumlah=htmlspecialchars($this->input->post('jumlah',TRUE),ENT_QUOTES);
       $satuan=htmlspecialchars($this->input->post('satuan',TRUE),ENT_QUOTES);
       $harga=htmlspecialchars($this->input->post('harga',TRUE),ENT_QUOTES);

       $this->M_dataindustri->simpan_peralatan($idikm, $nama, $merek, $tahun, $negara, $spesifikasi, $jumlah, $satuan, $harga);
        redirect('industri/dataindustri/info/' . $idikm);
    }
    
    function simpan_produksi(){
       $idikm=htmlspecialchars($this->input->post('idikm',TRUE),ENT_QUOTES);
       $nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
       $kapasitas=htmlspecialchars($this->input->post('kapasitas',TRUE),ENT_QUOTES);
       $jumlah=htmlspecialchars($this->input->post('jumlah',TRUE),ENT_QUOTES);
       $satuan=htmlspecialchars($this->input->post('satuan',TRUE),ENT_QUOTES);
       $nilai_produksi=htmlspecialchars($this->input->post('nilai_produksi',TRUE),ENT_QUOTES);
       $nilai_penjualan=htmlspecialchars($this->input->post('nilai_penjualan',TRUE),ENT_QUOTES);
       $tahun=htmlspecialchars($this->input->post('tahun',TRUE),ENT_QUOTES);

       $this->M_dataindustri->simpan_produksi($idikm, $nama, $kapasitas, $jumlah, $satuan, $nilai_produksi, $nilai_penjualan, $tahun);
        redirect('industri/dataindustri/info/' . $idikm);
    }

    function simpan_pemasaran(){
       $idikm=htmlspecialchars($this->input->post('idikm',TRUE),ENT_QUOTES);
       $tkp=htmlspecialchars($this->input->post('tkp',TRUE),ENT_QUOTES);
       $tkw=htmlspecialchars($this->input->post('tkw',TRUE),ENT_QUOTES);
       $inves=htmlspecialchars($this->input->post('inves',TRUE),ENT_QUOTES);
       $lokal=htmlspecialchars($this->input->post('lokal',TRUE),ENT_QUOTES);
       $luar=htmlspecialchars($this->input->post('luar',TRUE),ENT_QUOTES);
       $ekspor=htmlspecialchars($this->input->post('ekspor',TRUE),ENT_QUOTES);
       $tahun=htmlspecialchars($this->input->post('tahun',TRUE),ENT_QUOTES);

       $this->M_dataindustri->simpan_pemasaran($idikm, $tkp, $tkw, $inves, $lokal, $luar, $ekspor, $tahun);
        redirect('industri/dataindustri/info/' . $idikm);
    }
 

}