<?php
class M_kube extends CI_Model{
  //get all categories method
  //function get_category(){
  //    $result=$this->db->get('categories');
  //    return $result;
  //}
  //generate dataTable serverside method
  
  function get_all_kube() {
      
      $this->datatables->select('ID_KUB,NAMA_KUB,KONTAK_PERSON,ALAMAT,TELP,EMAIL');
      $this->datatables->from('kub');
  //    $this->datatables->join('categories', 'product_category_id=category_id');
      $this->datatables->add_column('view', '
           <a href="kube/alat/$1" class="btn btn-info" data-id="$1">B Alat</span></a>
          <a href="kube/hasil/$1" class="btn btn-info" data-id="$1" data-nama="$2" data-kontak="$3" data-alamat="$4" data-telp="$5" data-email="$6"><span class="fa fa-search"></span></a>
          <a href="javascript:void(0);" class="edit_record btn btn-info" data-id="$1" data-nama="$2" data-kontak="$3" data-alamat="$4" data-telp="$5" data-email="$6"><span class="fa fa-pencil"></span></a>  
          <a href="javascript:void(0);" class="delete_record btn btn-danger" data-id="$1"><span class="fa fa-trash"></span></a>','ID_KUB,NAMA_KUB,KONTAK_PERSON,ALAMAT,TELP,EMAIL');
      return $this->datatables->generate();
  }
  //insert data method
  function insert_kube(){
      $data=array(
        'ID_KUB'             => $this->input->post('ID'),
        'NAMA_KUB'           => $this->input->post('NAMA'),
        'KONTAK_PERSON'      => $this->input->post('KONTAK'),
        'ALAMAT'             => $this->input->post('ALAMAT'),
        'TELP'               => $this->input->post('TELP'),
        'EMAIL'              => $this->input->post('EMAIL')
      );
      $result=$this->db->insert('kub', $data);
      return $result;
  }
  //update data method
  function update_kube(){
      $ID_KUB=$this->input->post('ID');
      $data=array(
        'NAMA_KUB'           => $this->input->post('NAMA'),
        'KONTAK_PERSON'      => $this->input->post('KONTAK'),
        'ALAMAT'             => $this->input->post('ALAMAT'),
        'TELP'               => $this->input->post('TELP'),
        'EMAIL'              => $this->input->post('EMAIL')
      );
      $this->db->where('ID_KUB',$ID_KUB);
      $result=$this->db->update('kub', $data);
      return $result;
  }
  //delete data method
  function delete_kube(){
      $ID_KUB=$this->input->post('ID');
      $this->db->where('ID_KUB',$ID_KUB);
      $result=$this->db->delete('kub');
      return $result;
  }

//----------------------------------------

  function tampil_kube($kode){    
    $hsl=$this->db->query("select * from kub where ID_KUB LIKE '$kode'");
    return $hsl;
  }

  function tampil_datakube($kode){    
    $hsl=$this->db->query("select * from detailkub,industri WHERE detailkub.ID_IKM=industri.ID_IKM and detailkub.ID_KUB LIKE '$kode'");
    return $hsl;
  }

  function hapus_datakube($idkube){
    $hsl=$this->db->query("DELETE FROM detailkub WHERE ID='$idkube'");
    return $hsl;
  }

//---------------------------------------

  public function get_keyword($keyword){
            $this->db->select('*');
            $this->db->from('industri');
            $this->db->like('ID_IKM',$keyword);
            $this->db->or_like('NAMA_PERUSAHAAN',$keyword);
            $this->db->or_like('ALAMAT',$keyword);
            $this->db->or_like('PIMPINAN',$keyword);
            $this->db->or_like('KBLI',$keyword);
            $this->db->or_like('KECAMATAN',$keyword);
            $this->db->or_like('KELURAHAN',$keyword);
            return $this->db->get()->result();
  }

  function tambah_datakube($idikm,$idkube){
    $this->db->query("INSERT INTO detailkub (ID_KUB,ID_IKM) VALUES ('$idkube','$idikm')");
    return true;
  }

  //----------------------------------------

  function tampil_alat($kode){    
    $hsl=$this->db->query("select * from kub where ID_KUB LIKE '$kode'");
    return $hsl;
  }

  function tampil_dataalat($kode){    
    $hsl=$this->db->query("select * from databantuanalat WHERE  databantuanalat.ID_KUB LIKE '$kode'");
    return $hsl;
  }

  function hapus_dataalat($idkube){
    $hsl=$this->db->query("DELETE FROM detailbantuanalat WHERE ID='$idkube'");
    return $hsl;
  }

  public function get_bantuan($keyword){
            $this->db->select('*');
            $this->db->from('bantuandinas');
            $this->db->like('ID_BANTUAN',$keyword);
            $this->db->or_like('NAMA',$keyword);
            $this->db->or_like('JENIS',$keyword);
            return $this->db->get()->result();
  }

  function tambahdata_alat($idbantuan,$idkube,$merk,$jumlah,$tahun,$ket){
    $this->db->query("INSERT INTO detailbantuanalat (ID_KUB,ID_BANTUAN,MERK,JUMLAH,TAHUN,KET) VALUES ('$idkube','$idbantuan','$merk','$jumlah','$tahun','$ket')");
    return true;
  }

  //--------------------------------- Rekap --------------------------
  function get_all_rekapkubalat() {
      
      $this->datatables->select('ID_KUB,NAMA_KUB,KONTAK_PERSON,ALAMAT,TELP,EMAIL,JUMLAH');
      $this->datatables->from('rekapkubalat');
      $this->datatables->add_column('view', '
         <a href="alat/$1" class="btn btn-info" data-id="$1"><span class="fa fa-search"></span></span></a>
         ','ID_KUB,NAMA_KUB,KONTAK_PERSON,ALAMAT,TELP,EMAIL,JUMLAH');
      return $this->datatables->generate();
  }

}