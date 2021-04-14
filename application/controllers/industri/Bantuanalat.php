<?php
class bantuanalat extends CI_Controller{
  function __construct(){
    parent::__construct();
      if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
      $this->load->library('datatables'); //load library ignited-dataTable
      $this->load->model('M_bantuanalat'); //load model M_bantuanalat
  }
  function index(){
      //$x['category']=$this->M_bantuanalat->get_category();
      $this->load->view('industri/v_bantuanalat');
  }
 
  function get_bantuanalat_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_bantuanalat->get_all_bantuanalat();
  }
 
  function save(){ //insert record method
      $this->M_bantuanalat->insert_bantuanalat();
      redirect('industri/bantuanalat');
  }
 
  function update(){ //update record method
      $this->M_bantuanalat->update_bantuanalat();
      redirect('industri/bantuanalat');
  }
 
  function delete(){ //delete record method
      $this->M_bantuanalat->delete_bantuanalat();
      redirect('industri/bantuanalat');
  }

  //-----------------------------------------
  
  function hapus_databantuanalat(){ //delete record method
    $idbantuan=$this->input->post('idbantuan');
    $kode=$this->input->post('kode');    
    $this->M_bantuanalat->hapus_bantuanalat($idbantuan);
    //----
    redirect('industri/bantuanalat/hasil/'.$kode);
  }

  function hasil(){
        $kode=$this->uri->segment(4);   
        $data['data']=$this->M_bantuanalat->tampil_alat($kode);
        $data['dataalat']=$this->M_bantuanalat->tampil_databantuanalat($kode);
        $this->load->view('industri/v_databantuanalat',$data);
  }
 
 //------------------------------------------

  function get_industri_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_bantuanalat->get_all_industri();
  }
  
  public function tampilindustri(){
      $idbantuan = $this->input->post('idbantuan');
      $data['idbantuan'] = $idbantuan;
      $idbantuan=$data['idbantuan'];
      $this->load->view('industri/v_tambahkube_alat',$data);
  }

  public function search(){
        //--
        $idbantuan = $this->input->post('idbantuan');
        $keyword = $this->input->post('keyword');
        if($keyword==''){
                $idbantuan = $this->input->post('idbantuan');
                $data['idbantuan'] = $idbantuan;
                $idbantuan=$data['idbantuan'];
                redirect('industri/bantuanalat/hasil/'.$idbantuan);
        }
        else {
                $data['data']=$this->M_bantuanalat->get_keyword($keyword);
                $data['keyword']=$keyword;
                $data['idbantuan']=$idbantuan;
                $this->load->view('industri/v_tambahalat_kube',$data);
        }
  }

  function tambah_datakub(){
      $idbantuan=$this->input->post('idbantuan');
      $idkub = $this->input->post('idkube');
      $merk=$this->input->post('xmerk');
      $jumlah = $this->input->post('xjumlah');
      $tahun=$this->input->post('xtahun');
      $ket = $this->input->post('xketerangan');
      $this->M_bantuanalat->tambahbantuan_alat($idkub,$idbantuan,$merk,$jumlah,$tahun,$ket);

                $data['idbantuan'] = $idbantuan;
                $idbantuan=$data['idbantuan'];
                 //--
                //$idbantuan = $this->input->post('idbantuan');
                $keyword = $this->input->post('keyword');
                $data['keyword']=$keyword;                
                $data['data']=$this->M_bantuanalat->get_keyword($keyword);
                //$data['idbantuan']=$idbantuan;
                $this->load->view('industri/v_tambahalat_kube',$data);
  }

  function refresh(){
            //--
                $idbantuan = $this->input->post('idbantuan');
                redirect('industri/bantuanalat/hasil/'.$idbantuan);
  }
}