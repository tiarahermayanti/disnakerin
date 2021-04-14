<?php
class M_dataindustri extends CI_Model{

  function get_all_industri() {
      
      $this->datatables->select('ID_IKM,NAMA_PERUSAHAAN,PIMPINAN,ALAMAT,TELP,BENTUK_USAHA');
      
      $this->datatables->from("detailikm, bentukusaha");
    $this->datatables->where("detailikm.ID_BENTUK_USAHA = bentukusaha.ID_BENTUK_USAHA");
      $this->datatables->add_column('view', '
          <a href="dataindustri/info/$1" class="btn btn-info" data-id="$1"><span class="fa fa-search"></span></a>
          <a href="dataindustri/hasil/$1" class="btn btn-info" data-id="$1">P&F</span></a>
          ','ID_IKM,NAMA_PERUSAHAAN,PIMPINAN,ALAMAT,TELP,BENTUK_USAHA');
      return $this->datatables->generate();
  }
  //insert data method
  
  //update data method
  
  //delete data method
//----------------------------------------

  function tampil_industri($kode){    
    // $hsl=$this->db->query("select * from detailikm where ID_IKM LIKE '$kode'");

    $this->db->select("*");
    $this->db->from("detailikm, bentukusaha, kelurahan, kecamatan, kbli, direktoripotensi");
    $this->db->where("detailikm.ID_IKM LIKE '$kode'");
    $this->db->where("detailikm.ID_BENTUK_USAHA = bentukusaha.ID_BENTUK_USAHA");
    $this->db->where("detailikm.ID_KELURAHAN = kelurahan.ID_KELURAHAN");
    $this->db->where("kelurahan.ID_KECAMATAN = kecamatan.ID_KECAMATAN");
    $this->db->where("detailikm.ID_KBLI = kbli.ID_KBLI");
    $this->db->where("kbli.ID_DIREKTORIPOTENSI = direktoripotensi.ID_DIREKTORIPOTENSI");
    $hsl = $this->db->get(); 
    return $hsl;
  }

  function tampil_dataindustri($kode){    
    $hsl=$this->db->query("select * from datapelatihan WHERE  datapelatihan.ID_IKM LIKE '$kode'");
    return $hsl;
  }

  function hapusdata_industri($idikm){
    $hsl=$this->db->query("DELETE FROM detailpelatihan WHERE ID='$idikm'");
    return $hsl;
  }

//---------------------------------------

  public function get_keyword($keyword){
            $this->db->select('*');
            $this->db->from('bantuandinas');
            $this->db->like('ID_BANTUAN',$keyword);
            $this->db->or_like('NAMA',$keyword);
            $this->db->or_like('JENIS',$keyword);
            return $this->db->get()->result();
  }

  

   function tambahdata_pelatihan($idikm,$idpelatihan,$tahun){
    $this->db->query("INSERT INTO detailpelatihan (ID_BANTUAN,ID_IKM,TAHUN) VALUES ('$idpelatihan','$idikm','$tahun')");
    return true;
  }

 //--------------------------------- Rekap --------------------------
  function get_all_rekapindustripelatihan() {
      
      $this->datatables->select('ID_IKM,NAMA_PERUSAHAAN,PIMPINAN,ALAMAT,TELP,JUMLAH');
      $this->datatables->from('rekapindustripnf');
      $this->datatables->add_column('view', '
         <a href="hasil/$1" class="btn btn-info" data-id="$1"><span class="fa fa-search"></span></span></a>
         ','ID_IKM,NAMA_PERUSAHAAN,PIMPINAN,ALAMAT,TELP,JUMLAH');
      return $this->datatables->generate();
  }

  function getValidasiIkm(){
    $this->db->select("*");
    $this->db->from("detailikm, bentukusaha");
    $this->db->where("detailikm.ID_BENTUK_USAHA = bentukusaha.ID_BENTUK_USAHA");
    $this->db->where("detailikm.STATUS = 2");
    $hsl = $this->db->get();
    return $hsl;
  }

  function validIkm($kode){
    $hsl=$this->db->query("UPDATE detailikm SET STATUS ='3' WHERE ID_IKM='$kode'");
    return $hsl;
  }

  function validPengguna($kode){
    $hsl=$this->db->query("UPDATE pengguna SET pengguna_status ='1' WHERE ID_IKM ='$kode'");
    return $hsl;
  }

  function getBahanBaku($kode){
    $hsl = $this->db->get_where('detailbahanbaku', array('ID_IKM'=>$kode));
    return $hsl;
  }

  function getEnergi($kode){
    $hsl = $this->db->get_where('detailenergi', array('ID_IKM'=>$kode));
    return $hsl;
  }

  function getLegalitas($kode){
    $hsl = $this->db->get_where('detaillegalitas', array('ID_IKM'=>$kode));
    return $hsl;
  }

function getPeralatan($kode){
    $hsl = $this->db->get_where('detailperalatanproduksi',array('ID_IKM'=>$kode));
    return $hsl;
  }

  function getProduksi($kode){
    $hsl = $this->db->get_where('detailproduksi', array('ID_IKM'=>$kode));
    return $hsl;
  }

  function getPemasaran($kode){
    $hsl = $this->db->get_where('detailinfoikm', array('ID_IKM'=>$kode));
    return $hsl;
  }

  function getkoordinat(){
     $hsl=$this->db->query("select NAMA_PERUSAHAAN, KOORDINAT from detailikm where KOORDINAT != ''");
    return $hsl;
  }

  function getBentukUsaha(){
    $hsl = $this->db->get('bentukusaha');
    return $hsl;
  }

  function getDirektori(){
    $hsl = $this->db->get('direktoripotensi');
    return $hsl;
  }

  function getKecamatan(){
    $hsl = $this->db->get('kecamatan');
    return $hsl;
  }

  function getKbli($id){
    $hsl = $this->db->get_where('kbli', array('ID_DIREKTORIPOTENSI'=>$id));
    return $hsl->result();
  }

  function getKelurahan($id){
    $hsl = $this->db->get_where('kelurahan', array('ID_KECAMATAN'=>$id));
    return $hsl->result();
  }

  function simpan_industri($ID_KBLI, $ID_KELURAHAN, $ID_BENTUK_USAHA, $NAMA_PERUSAHAAN, $PIMPINAN, $ALAMAT, $TELP, $TAHUN_IZIN, $JENIS_PRODUK, $LEGALITAS, $FOTO){
    $hsl=$this->db->query("INSERT INTO detailikm(ID_KBLI, ID_KELURAHAN, ID_BENTUK_USAHA, NAMA_PERUSAHAAN, PIMPINAN, ALAMAT, TELP, TAHUN_IZIN, JENIS_PRODUK, STATUS, LEGALITAS, FOTO) VALUES ('$ID_KBLI', '$ID_KELURAHAN', '$ID_BENTUK_USAHA', '$NAMA_PERUSAHAAN', '$PIMPINAN', '$ALAMAT', '$TELP', '$TAHUN_IZIN', '$JENIS_PRODUK', '3', '$LEGALITAS', '$FOTO')");
    return $hsl;
  }

  function simpan_bahanbaku($id_ikm, $nama, $jenis, $sumber, $jmlh, $nilai, $tahun){
    $hsl=$this->db->query("INSERT INTO detailbahanbaku(ID_IKM, NAMA_BAHAN_BAKU, JENIS_BAHAN_BAKU, SUMBER, JUMLAH_KEBUTUHAN, NILAI_BAHAN_BAKU, TAHUN) VALUES ('$id_ikm', '$nama', '$jenis', '$sumber', '$jmlh', '$nilai', '$tahun')");
    return $hsl;
  }

  function simpan_energi($id_ikm, $jenis, $pemakaian, $kebutuhan){
    $hsl=$this->db->query("INSERT INTO detailenergi(ID_IKM, JENIS_ENERGI, PEMAKAIAN, KEBUTUHAN) VALUES ('$id_ikm', '$jenis', '$pemakaian', '$kebutuhan')");
    return $hsl;
  }

  function simpan_legalitas($id_ikm, $nama, $instansi, $noizin){
    $hsl=$this->db->query("INSERT INTO detaillegalitas(ID_IKM, NAMA_IZIN, INSTANSI, NO_IZIN) VALUES ('$id_ikm', '$nama', '$instansi', '$noizin')");
    return $hsl;
  }

  function simpan_peralatan($idikm, $nama, $merek, $tahun, $negara, $spesifikasi, $jumlah, $satuan, $harga){
    $hsl=$this->db->query("INSERT INTO detailperalatanproduksi(ID_IKM, NAMA_MESIN, MEREK, TAHUN, NEGARA_ASAL, SPESIFIKASI, JUMLAH, SATUAN, HARGA) VALUES ('$idikm', '$nama', '$merek', '$tahun', '$negara', '$spesifikasi', '$jumlah', '$satuan', '$harga')");
    return $hsl;
  }

  function simpan_produksi($idikm, $nama, $kapasitas, $jumlah, $satuan, $nilai_produksi, $nilai_penjualan, $tahun){
    $hsl=$this->db->query("INSERT INTO detailproduksi(ID_IKM, NAMA_PRODUK, KAPASITAS_PRODUKSI, JUMLAH_PRODUKSI, SATUAN, NILAI_PRODUKSI, NILAI_PENJUALAN, TAHUN) VALUES ('$idikm', '$nama', '$kapasitas', '$jumlah', '$satuan', '$nilai_produksi', '$nilai_penjualan', '$tahun')");
    return $hsl;
  }

  function simpan_pemasaran($idikm, $tkp, $tkw, $inves, $lokal, $luar, $ekspor, $tahun){
    $hsl=$this->db->query("INSERT INTO detailinfoikm(ID_IKM, TENAGA_KERJA_P, TENAGA_KERJA_W, NILAI_INVESTASI, PEMASARAN_LOKAL, PEMASARAN_LUAR_DAERAH, EKSPOR, TAHUN) VALUES ('$idikm', '$tkp', '$tkw', '$inves', '$lokal', '$luar', '$ekspor', '$tahun')");
    return $hsl;
  }

}