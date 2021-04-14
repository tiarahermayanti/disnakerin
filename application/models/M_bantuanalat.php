<?php
class M_bantuanalat extends CI_Model{
  //get all categories method
  //function get_category(){
  //    $result=$this->db->get('categories');
  //    return $result;
  //}
  //generate dataTable serverside method
  
  function get_all_bantuanalat() {
      $alat = 'Bantuan Alat';
      $this->datatables->select('ID_BANTUAN,NAMA,JENIS');
      $this->datatables->from('bantuandinas');
      $this->datatables->where('JENIS',$alat);
  //    $this->datatables->join('categories', 'product_category_id=category_id');
      $this->datatables->add_column('view', '
        <a href="bantuanalat/hasil/$1" class="btn btn-info" data-id="$1" data-nama="$2" data-jenis="$3"><span class="fa fa-search"></span></a>
        <a href="javascript:void(0);" class="edit_record btn btn-info" data-id="$1" data-nama="$2" data-jenis="$3"><span class="fa fa-pencil"></span></a>  
        <a href="javascript:void(0);" class="delete_record btn btn-danger" data-id="$1"><span class="fa fa-trash"></span></a>','ID_BANTUAN,NAMA,JENIS');
      return $this->datatables->generate();
  }
  //insert data method
  function insert_bantuanalat(){
      $alat = 'Bantuan Alat';
      $data=array(
        'ID_BANTUAN' => $this->input->post('ID'),
        'NAMA'       => $this->input->post('NAMA'),
        'JENIS'      => $alat
      );
      $result=$this->db->insert('bantuandinas', $data);
      return $result;
  }
  //update data method
  function update_bantuanalat(){
      $ID_BANTUAN=$this->input->post('ID');
      $data=array(
        'NAMA'  => $this->input->post('NAMA')
      );
      $this->db->where('ID_BANTUAN',$ID_BANTUAN);
      $result=$this->db->update('bantuandinas', $data);
      return $result;
  }
  //delete data method
  function delete_bantuanalat(){
      $ID_BANTUAN=$this->input->post('ID');
      $this->db->where('ID_BANTUAN',$ID_BANTUAN);
      $result=$this->db->delete('bantuandinas');
      return $result;
  }

  //----------------------------------------

  function tampil_alat($kode){    
    $hsl=$this->db->query("select * from bantuandinas where ID_BANTUAN LIKE '$kode'");
    return $hsl;
  }

  function tampil_databantuanalat($kode){    
    $hsl=$this->db->query("select * from databantuanalat WHERE  databantuanalat.ID_BANTUAN LIKE '$kode'");
    return $hsl;
  }

  function hapus_bantuanalat($idbantuan){
    $hsl=$this->db->query("DELETE FROM detailbantuanalat WHERE ID='$idbantuan'");
    return $hsl;
  }

//---------------------------------------

  public function get_keyword($keyword){
            $this->db->select('*');
            $this->db->from('kub');
            $this->db->like('ID_KUB',$keyword);
            $this->db->or_like('NAMA_KUB',$keyword);
            $this->db->or_like('ALAMAT',$keyword);
            $this->db->or_like('KONTAK_PERSON',$keyword);
            $this->db->or_like('TELP',$keyword);
            $this->db->or_like('EMAIL',$keyword);
            return $this->db->get()->result();
  }

  function tambahbantuan_alat($idkub,$idbantuan,$merk,$jumlah,$tahun,$ket){
    $this->db->query("INSERT INTO detailbantuanalat (ID_KUB,ID_BANTUAN,MERK,JUMLAH,TAHUN,KET) VALUES ('$idkub','$idbantuan','$merk','$jumlah','$tahun','$ket')");
    return true;
  }


}