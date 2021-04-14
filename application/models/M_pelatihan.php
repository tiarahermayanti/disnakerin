<?php
class M_pelatihan extends CI_Model{
  //get all categories method
  //function get_category(){
  //    $result=$this->db->get('categories');
  //    return $result;
  //}
  //generate dataTable serverside method
  
  function get_all_pelatihan() {
      $alat = 'Bantuan Alat';
      $this->datatables->select('ID_BANTUAN,NAMA,JENIS');
      $this->datatables->from('bantuandinas');
      $this->datatables->where('JENIS!=',$alat);
  //    $this->datatables->join('categories', 'product_category_id=category_id');
      $this->datatables->add_column('view', '
        <a href="datapelatihan/hasil/$1" class="btn btn-info" data-id="$1" data-nama="$2" data-jenis="$3"><span class="fa fa-search"></span></a>
        <a href="javascript:void(0);" class="edit_record btn btn-info" data-id="$1" data-nama="$2" data-jenis="$3"><span class="fa fa-pencil"></span></a>  
        <a href="javascript:void(0);" class="delete_record btn btn-danger" data-id="$1"><span class="fa fa-trash"></span></a>','ID_BANTUAN,NAMA,JENIS');
      return $this->datatables->generate();
  }
  //insert data method
  function insert_pelatihan(){
      $data=array(
        'ID_BANTUAN'             => $this->input->post('ID'),
        'NAMA'                     => $this->input->post('NAMA'),
        'JENIS' => $this->input->post('JENIS')
      );
      $result=$this->db->insert('bantuandinas', $data);
      return $result;
  }
  //update data method
  function update_pelatihan(){
      $ID_BANTUAN=$this->input->post('ID');
      $data=array(
        'NAMA'                     => $this->input->post('NAMA'),
        'JENIS' => $this->input->post('JENIS')
      );
      $this->db->where('ID_BANTUAN',$ID_BANTUAN);
      $result=$this->db->update('bantuandinas', $data);
      return $result;
  }
  //delete data method
  function delete_pelatihan(){
      $ID_BANTUAN=$this->input->post('ID');
      $this->db->where('ID_BANTUAN',$ID_BANTUAN);
      $result=$this->db->delete('bantuandinas');
      return $result;
  }

  //----------------------------------------

  function tampil_pelatihan($kode){    
    $hsl=$this->db->query("select * from bantuandinas where ID_BANTUAN LIKE '$kode'");
    return $hsl;
  }

  function tampil_datapelatihan($kode){    
    $hsl=$this->db->query("select * from datapelatihan WHERE  datapelatihan.ID_BANTUAN LIKE '$kode'");
    return $hsl;
  }

  function hapus_datapelatihan($idpelatihan){
    $hsl=$this->db->query("DELETE FROM detailpelatihan WHERE ID='$idpelatihan'");
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

   function tambahdata_pelatihan($idikm,$idpelatihan,$tahun){
    $this->db->query("INSERT INTO detailpelatihan (ID_BANTUAN,ID_IKM,TAHUN) VALUES ('$idpelatihan','$idikm','$tahun')");
    return true;
  }


}