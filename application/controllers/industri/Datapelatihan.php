<?php
class datapelatihan extends CI_Controller{
  function __construct(){
    parent::__construct();
      if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
      $this->load->library('datatables'); //load library ignited-dataTable
      $this->load->model('M_pelatihan'); //load model M_pelatihan
  }
  function index(){
      //$x['category']=$this->M_pelatihan->get_category();
      $this->load->view('industri/v_pelatihan');
  }
 
  function get_pelatihan_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_pelatihan->get_all_pelatihan();
  }
 
  function save(){ //insert record method
      $this->M_pelatihan->insert_pelatihan();
      redirect('industri/datapelatihan');
  }
 
  function update(){ //update record method
      $this->M_pelatihan->update_pelatihan();
      redirect('industri/datapelatihan');
  }
 
  function delete(){ //delete record method
      $this->M_pelatihan->delete_pelatihan();
      redirect('industri/datapelatihan');
  }

  //-----------------------------------------
  
  function hapus_datalatih(){ //delete record method
    $idpelatihan=$this->input->post('idpelatihan');
    $kode=$this->input->post('kode');    
    $this->M_pelatihan->hapus_datapelatihan($idpelatihan);
    //----
    redirect('industri/datapelatihan/hasil/'.$kode);
  }

  function hasil(){
        $kode=$this->uri->segment(4);   
        $data['data']=$this->M_pelatihan->tampil_pelatihan($kode);
        $data['datalatih']=$this->M_pelatihan->tampil_datapelatihan($kode);
        $this->load->view('industri/v_datapelatihan',$data);
  }
 
 //------------------------------------------

  function get_industri_json() { //get product data and encode to be JSON object
      header('Content-Type: application/json');
      echo $this->M_pelatihan->get_all_industri();
  }
  
  public function tampilindustri(){
      $idpelatihan = $this->input->post('idpelatihan');
      $data['idpelatihan'] = $idpelatihan;
      $idpelatihan=$data['idpelatihan'];
      $this->load->view('industri/v_tambahindustri_pelatihan',$data);
  }

  public function search(){
        //--
        $idpelatihan = $this->input->post('idpelatihan');
        $keyword = $this->input->post('keyword');
        if($keyword==''){
                $idpelatihan = $this->input->post('idpelatihan');
                $data['idpelatihan'] = $idpelatihan;
                $idpelatihan=$data['idpelatihan'];
                redirect('industri/datapelatihan/hasil/'.$idpelatihan);
        }
        else {
                $data['data']=$this->M_pelatihan->get_keyword($keyword);
                $data['keyword']=$keyword;
                $data['idpelatihan']=$idpelatihan;
                $this->load->view('industri/v_tambahindustri_pelatihan',$data);
        }
  }

  function tambah_dataindustri(){
      $idikm=$this->input->post('idikm');
      $idpelatihan = $this->input->post('idpelatihan');
      $tahun = $this->input->post('xtahun');
      $this->M_pelatihan->tambahdata_pelatihan($idikm,$idpelatihan,$tahun);

                $data['idpelatihan'] = $idpelatihan;
                $idpelatihan=$data['idpelatihan'];

                 //--
                //$idpelatihan = $this->input->post('idpelatihan');
                $keyword = $this->input->post('keyword');
                $data['keyword']=$keyword;                
                $data['data']=$this->M_pelatihan->get_keyword($keyword);
                //$data['idpelatihan']=$idpelatihan;
                $this->load->view('industri/v_tambahindustri_pelatihan',$data);
  }

  function refresh(){
            //--
                $idpelatihan = $this->input->post('idpelatihan');
                redirect('industri/datapelatihan/hasil/'.$idpelatihan);
  }
}