<?php
class Kube extends CI_Controller{
  function __construct(){
    parent::__construct();
      if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
      $this->load->library('datatables'); //load library ignited-dataTable
      $this->load->model('M_kube'); //load model M_kube
      
  }
  function index(){
      //$x['category']=$this->M_kube->get_category();
      $this->load->view('industri/v_kube');
  }
 
  function get_kube_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_kube->get_all_kube();
  }
 
  function save(){ //insert record method
      $this->M_kube->insert_kube();
      redirect('industri/kube');
  }
 
  function update(){ //update record method
      $this->M_kube->update_kube();
      redirect('industri/kube');
  }
 
  function delete(){ //delete record method
      $this->M_kube->delete_kube();
      redirect('industri/kube');
  }

//-----------------------------------------
  
  function hapus_datakub(){ //delete record method
    $idkube=$this->input->post('idkube');
    $kode=$this->input->post('kode');    
    $this->M_kube->hapus_datakube($idkube);
    //----
    redirect('industri/kube/hasil/'.$kode);
  }

  function hasil(){
        $kode=$this->uri->segment(4);   
        $data['data']=$this->M_kube->tampil_kube($kode);
        $data['datakub']=$this->M_kube->tampil_datakube($kode);
        $this->load->view('industri/v_datakube',$data);
  }

//------------------------------------------

  function get_industri_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_kube->get_all_industri();
  }
  
  public function tampilindustri(){
      $idkube = $this->input->post('idkube');
      $data['idkube'] = $idkube;
      $idkube=$data['idkube'];
      $this->load->view('industri/v_tambahindustri_kube',$data);
  }

  public function search(){
        //--
        $idkube = $this->input->post('idkube');
        $keyword = $this->input->post('keyword');
        if($keyword==''){
                $idkube = $this->input->post('idkube');
                $data['idkube'] = $idkube;
                $idkube=$data['idkube'];
                redirect('industri/kube/hasil/'.$idkube);
        }
        else {
                $data['data']=$this->M_kube->get_keyword($keyword);
                $data['keyword']=$keyword;
                $data['idkube']=$idkube;
                $this->load->view('industri/v_tambahindustri_kube',$data);
        }
  }

  function tambah_dataindustri(){
      $idikm=$this->input->post('idikm');
      $idkube = $this->input->post('idkube');
      $this->M_kube->tambah_datakube($idikm,$idkube);

                $data['idkube'] = $idkube;
                $idkube=$data['idkube'];
                 //--
                //$idkube = $this->input->post('idkube');
                $keyword = $this->input->post('keyword');
                $data['keyword']=$keyword;                
                $data['data']=$this->M_kube->get_keyword($keyword);
                //$data['idkube']=$idkube;
                $this->load->view('industri/v_tambahindustri_kube',$data);
  }

  function refresh(){
            //--
                $idkube = $this->input->post('idkube');
                redirect('industri/kube/hasil/'.$idkube);
  }

//---------------------------

  function hapus_dataalat(){ //delete record method
    $idkube=$this->input->post('idkube');
    $kode=$this->input->post('kode');    
    $this->M_kube->hapus_dataalat($idkube);
    //----
    redirect('industri/kube/alat/'.$kode);
  }

  function alat(){
        $kode=$this->uri->segment(4);   
        $data['data']=$this->M_kube->tampil_alat($kode);
        $data['dataalat']=$this->M_kube->tampil_dataalat($kode);
        $this->load->view('industri/v_dataalat',$data);
  }

   public function cari(){
        //--
        $idkube = $this->input->post('idkube');
        $keyword = $this->input->post('keyword');
        if($keyword==''){
                $idkube = $this->input->post('idkube');
                $data['idkube'] = $idkube;
                $idkube=$data['idkube'];
                redirect('industri/kube/alat/'.$idkube);
        }
        else {
                $data['data']=$this->M_kube->get_bantuan($keyword);
                $data['keyword']=$keyword;
                $data['idkube']=$idkube;
                $this->load->view('industri/v_tambahkube_alat',$data);
        }
  }

  function refreshlagi(){
            //--
                $idkube = $this->input->post('idkube');
                redirect('industri/kube/alat/'.$idkube);
  }

  function tambah_dataalat(){
      $idbantuan=$this->input->post('idbantuan');
      $idkube = $this->input->post('idkube');
      $merk=$this->input->post('xmerk');
      $jumlah = $this->input->post('xjumlah');
      $tahun=$this->input->post('xtahun');
      $ket = $this->input->post('xketerangan');
      $this->M_kube->tambahdata_alat($idbantuan,$idkube,$merk,$jumlah,$tahun,$ket);

                $data['idkube'] = $idkube;
                $idkube=$data['idkube'];
                 //--
                //$idkube = $this->input->post('idkube');
                $keyword = $this->input->post('keyword');
                $data['keyword']=$keyword;                
                $data['data']=$this->M_kube->get_bantuan($keyword);
                //$data['idkube']=$idkube;
                $this->load->view('industri/v_tambahkube_alat',$data);
  }

  //--------------------------------- Rekap --------------------------
   function rekapkubalat(){
      //$x['category']=$this->M_dataindustri->get_category();
      $this->load->view('industri/v_rekapkub_alat');
  }
 
  function get_rekapkubalat_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_kube->get_all_rekapkubalat();
  }
}