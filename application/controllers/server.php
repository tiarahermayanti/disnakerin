<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class server extends CI_Controller {


	function registerUser() {
        $id_ikm = $this->input->post('id_ikm');
		$nama = $this->input->post('nama');
		$nohp = $this->input->post('nohp');
		$pass = $this->input->post('password');
		$email = $this->input->post('email');


		$tambah = array(
            'ID_IKM' => $id_ikm,
			'pengguna_nama' => $nama,
			'pengguna_nohp' => $nohp,
			'pengguna_password' => md5($pass),
			'pengguna_email' => $email,
			'pengguna_status' => '0',
			'pengguna_level' => '0'
		);
		

		$status = $this->db->insert('pengguna', $tambah);
		$response = array();
		 if ($status == true) {         
		 	$response['pesan'] = 'insert data berhasil';
		 	$response['status'] = 1;     
		 } else {
		 	$response['pesan'] = 'insert data belum berhasil';
		 	$response ['status'] = 0;
		 }

		 echo json_encode($response); 
	}

	public function login(){

       $nohp = $this->input->post('nohp');
        $pass = $this->input->post('password');

        $where = array('pengguna_nohp' => $nohp, 'pengguna_password' => md5($pass), 'pengguna_status' => '1', 'pengguna_level'=> '0');
        $this->db->select("pengguna_id, ID_IKM, pengguna_nama, pengguna_email, pengguna_photo");
        $this->db->from('pengguna');
        $this->db->where($where);
        $hasil =  $this->db->get();

       // $hasil = $this->db->get_where('pengguna', $where);
      
            if ($hasil->num_rows() > 0) {
               $response["pesan"] = "Login Sukses";
                $response['status'] = 1;  
                $response['data_login'] = $hasil->result();
            } else {
               $response["pesan"] = "Login Gagal";
               $response['status'] = 0;  
            }
        

        echo json_encode($response);
    }

    public function getDetailIkm(){
        
        $where = array('STATUS' => '1');
        $hasil = $this->db->get_where('detailikm', $where);

         if ($hasil->num_rows() > 0) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

    public function getIkmById(){
        $keyword = $this->input->post('id_ikm');
        $where = array('ID_IKM' => $keyword);
        $hasil = $this->db->get_where('detailikm', $where);

         if ($hasil->num_rows() > 0) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

     public function getBentukUsaha(){
        
        $hasil = $this->db->get('bentukusaha');

         if ($hasil->num_rows() > 0) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

    public function getDirektoripotensi(){
        
        $hasil = $this->db->get('direktoripotensi');

         if ($hasil->num_rows() > 0) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

    public function getKbli(){
        $keyword = $this->input->post('id_direktoripotensi');
        $where = array('ID_DIREKTORIPOTENSI' => $keyword);
        $hasil = $this->db->get_where('kbli', $where);

         if ($hasil->num_rows() > 0) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

    public function getKbliById(){
    
        $hasil = $this->db->get_where('kbli', array('ID_KBLI' => $this->input->post('id_kbli')));


         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
           
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);

    
    }

     public function getKecamatan(){
        
        $hasil = $this->db->get('kecamatan');

         if ($hasil->num_rows() > 0) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

    public function getKelurahan(){
        $keyword = $this->input->post('id_kecamatan');
        $where = array('ID_KECAMATAN' => $keyword);
        $hasil = $this->db->get_where('kelurahan', $where);
        $getById = $this->db->get_where('kelurahan', array('ID_KELURAHAN' => $this->input->post('id_kelurahan')));


         if ($hasil->num_rows() > 0 ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            if($getById->num_rows() > 0 ){
                 $response['getByID'] = $getById->result();
            }
           
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

    public function getKelurahanById(){
    
        $hasil = $this->db->get_where('kelurahan', array('ID_KELURAHAN' => $this->input->post('id_kelurahan')));


         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
           
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }



    public function insertDetailIkm(){
        $part = "./upload/";
        $filename = "img".rand(9,9999).".jpg";

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if($_FILES['uploadImage']) {
                $destinationfile = $part.$filename;

                if(move_uploaded_file($_FILES['uploadImage']['tmp_name'], $destinationfile)) {

                } 
            } 

            $idKbli = $this->input->post('idKbli');
            $idKlrh = $this->input->post('idKlrh');
            $idBentukUsaha = $this->input->post('idBentukUsaha');
            $namaPerusahaan = $this->input->post('namaPerusahaan');
            $pimpinan = $this->input->post('pimpinan');
            $alamat = $this->input->post('alamat');
            $koor = $this->input->post('koordinat');
            $foto = $filename;
            $telp = $this->input->post('telp');
            $tahun = $this->input->post('tahun');
            $jenisProduk = $this->input->post('jenisProduk');
            $status = "2";
            $legal = $this->input->post('legal');

            $tambah = array(
                'ID_KBLI' => $idKbli,
                'ID_KELURAHAN' => $idKlrh,
                'ID_BENTUK_USAHA' => $idBentukUsaha,
                'NAMA_PERUSAHAAN' => $namaPerusahaan,
                'PIMPINAN' => $pimpinan,
                'ALAMAT' => $alamat,
                'KOORDINAT' => $koor,
                'FOTO' => $foto,
                'TELP' => $telp,
                'TAHUN_IZIN' => $tahun,
                'JENIS_PRODUK' => $jenisProduk,
                'STATUS' => $status,
                'LEGALITAS' => $legal );
        
            $status = $this->db->insert('detailikm', $tambah);
            $response = array();
            if ($status == true) {         
                $response['pesan'] = 'insert data berhasil';
                $response['status'] = 1;     
            } else {
                 $response['pesan'] = 'insert data belum berhasil';
                $response ['status'] = 0;
            }
            
        }

        echo json_encode($response); 

    }

    public function updateDetailIkm(){
        $part = "./upload/";
        $filename = "img".rand(9,9999).".jpg";

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if($_FILES['uploadImage']) {
                $destinationfile = $part.$filename;

                if(move_uploaded_file($_FILES['uploadImage']['tmp_name'], $destinationfile)) {

                } 
            } 
            $idIkm = $this->input->post('idIkm');
            $idKbli = $this->input->post('idKbli');
            $idKlrh = $this->input->post('idKlrh');
            $idBentukUsaha = $this->input->post('idBentukUsaha');
            $namaPerusahaan = $this->input->post('namaPerusahaan');
            $pimpinan = $this->input->post('pimpinan');
            $alamat = $this->input->post('alamat');
            $koor = $this->input->post('koordinat');
            $foto = $filename;
            $telp = $this->input->post('telp');
            $tahun = $this->input->post('tahun');
            $jenisProduk = $this->input->post('jenisProduk');
            $status = "2";
            $legal = $this->input->post('legal');

            $this->db->where('ID_IKM', $idIkm); 
            $tambah = array(
                'ID_KBLI' => $idKbli,
                'ID_KELURAHAN' => $idKlrh,
                'ID_BENTUK_USAHA' => $idBentukUsaha,
                'NAMA_PERUSAHAAN' => $namaPerusahaan,
                'PIMPINAN' => $pimpinan,
                'ALAMAT' => $alamat,
                'KOORDINAT' => $koor,
                'FOTO' => $foto,
                'TELP' => $telp,
                'TAHUN_IZIN' => $tahun,
                'JENIS_PRODUK' => $jenisProduk,
                'STATUS' => $status,
                'LEGALITAS' => $legal );
        
            $status = $this->db->update('detailikm', $tambah);
            $response = array();
            if ($status == true) {         
                $response['pesan'] = 'Update data berhasil';
                $response['status'] = 1;     
            } else {
                 $response['pesan'] = 'Update data belum berhasil';
                $response ['status'] = 0;
            }
            
        }

        echo json_encode($response); 
    }

    function getIdikm(){
        $nohp = $this->input->post('nohp');
        $hasil = $this->db->query("select ID_IKM from detailikm where TELP = '$nohp'");
        if ($hasil->num_rows() > 0) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

  

     public function getEvent(){
        
        $hasil = $this->db->get('events');

         if ($hasil->num_rows() > 0) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }
        echo json_encode($response);
    }

    public function insertJoinEvent(){
        $idEvent = $this->input->post('idEvent');
        $idPengguna = $this->input->post('idPengguna');
        
         // $join = $this->db->get_where('join_event', array('id_event' => $idEvent,
         //            'id_pengguna' => $idPengguna));

          $this->db->select('*');
         $this->db->from('join_event');
         $this->db->where('id_event', $idEvent);
        $this->db->where('id_pengguna', $idPengguna);
        $join = $this->db->get();

         if($join->num_rows() == 0){
            $tambah = array(
                    'id_event' => $idEvent,
                    'id_pengguna' => $idPengguna,
                    'status_join_event' => '0'
                );
            $status = $this->db->insert('join_event', $tambah);
            if ($status == true) {         
                    $response['pesan'] = 'insert data berhasil';
                    $response['status'] = 1;     
                 } else {
                    $response['pesan'] = 'insert data belum berhasil';
                    $response ['status'] = 0;
                 }
         } else{
            $response['pesan'] = 'Anda Telah Daftar, Menunggu Konfirmasi Admin';
            $response ['status'] = 0;
         } 


         echo json_encode($response);
    }

    public function getJoinEvent(){
        $idPengguna = $this->input->post('id_pengguna');

        $this->db->select('*');
         $this->db->from('events, join_event');
        $this->db->where('events.event_id = join_event.id_event');
        $this->db->where('join_event.id_pengguna', $idPengguna);
        $this->db->where('join_event.status_join_event = 1');
        $hasil = $this->db->get();

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response);
        
    }

    public function getHistoryEvent(){
        $idPengguna = $this->input->post('id_pengguna');

        $this->db->select('*');
         $this->db->from('events, join_event');
        $this->db->where('events.event_id = join_event.id_event');
        $this->db->where('join_event.id_pengguna', $idPengguna);
        $this->db->where('join_event.status_join_event = 2');
        $hasil = $this->db->get();

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response);
        
    }

    public function getByIdBahanBaku(){
        $id_ikm = $this->input->post('id_ikm');
        // $hasil = $this->db->get_where('detailbahanbaku', array('ID_IKM'=>$id_ikm));
        $hasil=$this->db->query("SELECT * FROM detailbahanbaku where ID_IKM = '$id_ikm' ORDER BY TAHUN DESC");
       

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response); 
    

    }

    public function insertBahanBaku(){

        $id_ikm = $this->input->post('id_ikm');
        $namabb = $this->input->post('namabb');
        $jenisbb = $this->input->post('jenisbb');
        $sumber = $this->input->post('sumber');
        $jmlhkebutuhan = $this->input->post('jmlhkebutuhan');
        $nilaibb = $this->input->post('nilaibb');
        $tahun = $this->input->post('tahun');

        $tambah = array(
            'ID_IKM' => $id_ikm,
            'NAMA_BAHAN_BAKU' => $namabb,
            'JENIS_BAHAN_BAKU' => $jenisbb,
            'SUMBER' => $sumber,
            'JUMLAH_KEBUTUHAN' => $jmlhkebutuhan,
            'NILAI_BAHAN_BAKU' => $nilaibb,
            'TAHUN' => $tahun
            
        );
        

        $status = $this->db->insert('detailbahanbaku',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'insert data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'insert data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function updateBahanBaku(){
        $id = $this->input->post('id');
        $namabb = $this->input->post('namabb');
        $jenisbb = $this->input->post('jenisbb');
        $sumber = $this->input->post('sumber');
        $jmlhkebutuhan = $this->input->post('jmlhkebutuhan');
        $nilaibb = $this->input->post('nilaibb');
        $tahun = $this->input->post('tahun');

        $tambah = array(
            'NAMA_BAHAN_BAKU' => $namabb,
            'JENIS_BAHAN_BAKU' => $jenisbb,
            'SUMBER' => $sumber,
            'JUMLAH_KEBUTUHAN' => $jmlhkebutuhan,
            'NILAI_BAHAN_BAKU' => $nilaibb,
            'TAHUN' => $tahun
        );
        
        $this->db->where('ID', $id);
        $status = $this->db->update('detailbahanbaku', $tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'update data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'update data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function deleteBahanBaku(){
        $id = $this->input->post('id');

        $this->db->where('ID', $id);
        $status = $this->db->delete('detailbahanbaku');

         if ($status == true) {         
            $response['pesan'] = 'delete data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'delete data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response);
    }

     public function getByIdEnergi(){
        $id_ikm = $this->input->post('id_ikm');
        $hasil = $this->db->get_where('detailenergi', array('ID_IKM'=>$id_ikm));

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response); 

    }

    public function insertEnergi(){

        $id_ikm = $this->input->post('id_ikm');
        $jenis = $this->input->post('jenis');
        $pemakaian = $this->input->post('pemakaian');
        $kebutuhan = $this->input->post('kebutuhan');

        $tambah = array(
            'ID_IKM' => $id_ikm,
            'JENIS_ENERGI' => $jenis,
            'PEMAKAIAN' => $pemakaian,
            'KEBUTUHAN' => $kebutuhan
        );
        

        $status = $this->db->insert('detailenergi',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'insert data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'insert data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

     public function updateEnergi(){
        $id = $this->input->post('id');
        $jenis = $this->input->post('jenis');
        $pemakaian = $this->input->post('pemakaian');
        $kebutuhan = $this->input->post('kebutuhan');

        $tambah = array(
            'JENIS_ENERGI' => $jenis,
            'PEMAKAIAN' => $pemakaian,
            'KEBUTUHAN' => $kebutuhan
        );
        
        $this->db->where('ID', $id);
        $status = $this->db->update('detailenergi',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'Update data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'Update data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

     public function deleteEnergi(){
        $id = $this->input->post('id');

        $this->db->where('ID', $id);
        $status = $this->db->delete('detailenergi');

         if ($status == true) {         
            $response['pesan'] = 'delete data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'delete data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response);
    }

    public function getByIdLegalitas(){
        $id_ikm = $this->input->post('id_ikm');
        $hasil = $this->db->get_where('detaillegalitas', array('ID_IKM'=>$id_ikm));

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response); 
    }

    public function insertLegalitas(){

        $id_ikm = $this->input->post('id_ikm');
        $namaIzin = $this->input->post('namaIzin');
        $instansi = $this->input->post('instansi');
        $noIzin = $this->input->post('noIzin');

        $tambah = array(
            'ID_IKM' => $id_ikm,
            'NAMA_IZIN' => $namaIzin,
            'INSTANSI' => $instansi,
            'NO_IZIN' => $noIzin
        );
        

        $status = $this->db->insert('detaillegalitas',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'insert data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'insert data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function updateLegalitas(){
        $id = $this->input->post('id');
        $namaIzin = $this->input->post('namaIzin');
        $instansi = $this->input->post('instansi');
        $noIzin = $this->input->post('noIzin');

        $tambah = array(
            'NAMA_IZIN' => $namaIzin,
            'INSTANSI' => $instansi,
            'NO_IZIN' => $noIzin
        );
        
        $this->db->where('ID', $id);
        $status = $this->db->update('detaillegalitas',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'update data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'update data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function deleteLegalitas(){
        $id = $this->input->post('id');

        $this->db->where('ID', $id);
        $status = $this->db->delete('detaillegalitas');

         if ($status == true) {         
            $response['pesan'] = 'delete data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'delete data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response);
    }

    public function getByIdPeralatan(){
        $id_ikm = $this->input->post('id_ikm');
        $hasil = $this->db->get_where('detailperalatanproduksi', array('ID_IKM'=>$id_ikm));

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response); 
    }

     public function insertPeralatan(){

        $id_ikm = $this->input->post('id_ikm');
        $nama_mesin = $this->input->post('nama_mesin');
        $merek = $this->input->post('merek');
        $tahun = $this->input->post('tahun');
        $negara_asal = $this->input->post('negara');
        $spesifikasi = $this->input->post('spesifikasi');
        $jumlah = $this->input->post('jumlah');
        $satuan = $this->input->post('satuan');
        $harga = $this->input->post('harga');

        $tambah = array(
            'ID_IKM' => $id_ikm,
            'NAMA_MESIN' => $nama_mesin,
            'MEREK' => $merek,
            'TAHUN' => $tahun,
            'NEGARA_ASAL' => $negara_asal,
            'SPESIFIKASI' => $spesifikasi,
            'JUMLAH' => $jumlah,
            'SATUAN' => $satuan,
            'HARGA' => $harga
        );
        

        $status = $this->db->insert('detailperalatanproduksi',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'insert data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'insert data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function updatePeralatan(){
        $id = $this->input->post('id');
        $nama_mesin = $this->input->post('nama_mesin');
        $merek = $this->input->post('merek');
        $tahun = $this->input->post('tahun');
        $negara_asal = $this->input->post('negara');
        $spesifikasi = $this->input->post('spesifikasi');
        $jumlah = $this->input->post('jumlah');
        $satuan = $this->input->post('satuan');
        $harga = $this->input->post('harga');

        $tambah = array(
            'NAMA_MESIN' => $nama_mesin,
            'MEREK' => $merek,
            'TAHUN' => $tahun,
            'NEGARA_ASAL' => $negara_asal,
            'SPESIFIKASI' => $spesifikasi,
            'JUMLAH' => $jumlah,
            'SATUAN' => $satuan,
            'HARGA' => $harga
        );
        
        $this->db->where('ID', $id);
        $status = $this->db->update('detailperalatanproduksi',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'Update data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'Update data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

     public function deletePeralatan(){
        $id = $this->input->post('id');

        $this->db->where('ID', $id);
        $status = $this->db->delete('detailperalatanproduksi');

         if ($status == true) {         
            $response['pesan'] = 'delete data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'delete data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response);
    }

     public function getByIdProduksi(){
        $id_ikm = $this->input->post('id_ikm');
        // $hasil = $this->db->get_where('detailproduksi', array('ID_IKM'=>$id_ikm));
         $hasil=$this->db->query("SELECT * FROM detailproduksi where ID_IKM = '$id_ikm' ORDER BY TAHUN DESC");
       

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response); 
    }

    public function insertProduksi(){

        $id_ikm = $this->input->post('id_ikm');
        $nama = $this->input->post('nama');
        $kapasitas = $this->input->post('kapasitas');
        $jumlah = $this->input->post('jumlah');
        $satuan = $this->input->post('satuan');
        $nilai_produksi = $this->input->post('nilai_produksi');
        $nilai_penjualan = $this->input->post('nilai_penjualan');
        $tahun = $this->input->post('tahun');

        $tambah = array(
            'ID_IKM' => $id_ikm,
            'NAMA_PRODUK' => $nama,
            'KAPASITAS_PRODUKSI' => $kapasitas,
            'JUMLAH_PRODUKSI' => $jumlah,
            'SATUAN' => $satuan,
            'NILAI_PRODUKSI' => $nilai_produksi,
            'NILAI_PENJUALAN' => $nilai_penjualan,
            'TAHUN' => $tahun
        );
        

        $status = $this->db->insert('detailproduksi',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'insert data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'insert data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

     public function updateProduksi(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $kapasitas = $this->input->post('kapasitas');
        $jumlah = $this->input->post('jumlah');
        $satuan = $this->input->post('satuan');
        $nilai_produksi = $this->input->post('nilai_produksi');
        $nilai_penjualan = $this->input->post('nilai_penjualan');
        $tahun = $this->input->post('tahun');

        $tambah = array(
            'NAMA_PRODUK' => $nama,
            'KAPASITAS_PRODUKSI' => $kapasitas,
            'JUMLAH_PRODUKSI' => $jumlah,
            'SATUAN' => $satuan,
            'NILAI_PRODUKSI' => $nilai_produksi,
            'NILAI_PENJUALAN' => $nilai_penjualan,
            'TAHUN' => $tahun
        );
        
        $this->db->where('ID', $id);
        $status = $this->db->update('detailproduksi',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'Update data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'Update data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function deleteProduksi(){
        $id = $this->input->post('id');

        $this->db->where('ID', $id);
        $status = $this->db->delete('detailproduksi');

         if ($status == true) {         
            $response['pesan'] = 'delete data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'delete data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response);
         
    }

     public function getByIdPemasaran(){
        $id_ikm = $this->input->post('id_ikm');
     
         $hasil=$this->db->query("SELECT * FROM detailinfoikm where ID_IKM = '$id_ikm' ORDER BY TAHUN DESC");
       

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response); 
    }

    public function insertPemasaran(){
          $id_ikm = $this->input->post('id_ikm');
        $tkp = $this->input->post('tkp');
        $tkw = $this->input->post('tkw');
        $investasi = $this->input->post('investasi');
        $lokal = $this->input->post('lokal');
        $luar = $this->input->post('luar');
        $ekspor = $this->input->post('ekspor');
        $tahun = $this->input->post('tahun');

        $tambah = array(
            'ID_IKM' => $id_ikm,
            'TENAGA_KERJA_P' => $tkp,
            'TENAGA_KERJA_W' => $tkw,
            'NILAI_INVESTASI' => $investasi,
            'PEMASARAN_LOKAL' => $lokal,
            'PEMASARAN_LUAR_DAERAH' => $luar,
            'EKSPOR' => $ekspor,
            'TAHUN' => $tahun
        );
        
        
        $status = $this->db->insert('detailinfoikm',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'insert data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'insert data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function updatePemasaran(){
        $id = $this->input->post('id');
        $tkp = $this->input->post('tkp');
        $tkw = $this->input->post('tkw');
        $investasi = $this->input->post('investasi');
        $lokal = $this->input->post('lokal');
        $luar = $this->input->post('luar');
        $ekspor = $this->input->post('ekspor');
        $tahun = $this->input->post('tahun');

        $tambah = array(
            'TENAGA_KERJA_P' => $tkp,
            'TENAGA_KERJA_W' => $tkw,
            'NILAI_INVESTASI' => $investasi,
            'PEMASARAN_LOKAL' => $lokal,
            'PEMASARAN_LUAR_DAERAH' => $luar,
            'EKSPOR' => $ekspor,
            'TAHUN' => $tahun
        );
        
        $this->db->where('ID', $id);
        $status = $this->db->update('detailinfoikm',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'insert data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'insert data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function deletePemasaran(){
        $id = $this->input->post('id');

        $this->db->where('ID', $id);
        $status = $this->db->delete('detailinfoikm');

         if ($status == true) {         
            $response['pesan'] = 'delete data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'delete data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response);
         
    }

    public function getByIdPengguna(){
        $pengguna_id = $this->input->post('pengguna_id');
        $hasil = $this->db->get_where('pengguna', array('pengguna_id'=>$pengguna_id));

         if ($hasil->num_rows() > 0  ) {
            $response["pesan"] = "Data Ada";
            $response["status"] = 1;
            $response['data'] = $hasil->result();
            
        } else {
            $response["pesan"] = "Gagal";
            $response["status"] = 0;
        }

        echo json_encode($response); 
    }

     public function updatePengguna(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jenkel = $this->input->post('jenkel');
        $no_hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $moto = $this->input->post('moto');
        $tentang = $this->input->post('tentang');

        $tambah = array(
            'pengguna_nama' => $nama,
            'pengguna_jenkel' => $jenkel,
            'pengguna_nohp' => $no_hp,
            'pengguna_email' => $email,
            'pengguna_tentang' => $tentang,
            'pengguna_moto' => $moto
        );
        
        $this->db->where('pengguna_id', $id);
        $status = $this->db->update('pengguna',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'Update data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'Update data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
    }

    public function updateFotoPengguna(){

        $part = "./foto_profile/";
        $filename = "img".rand(9,9999).".jpg";

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if($_FILES['uploadImage']) {
                $destinationfile = $part.$filename;

                if(move_uploaded_file($_FILES['uploadImage']['tmp_name'], $destinationfile)) {

                } 
            }
        } 

        $id = $this->input->post('id');
        
        $tambah = array(
            'pengguna_photo' => $filename
        );
        
        $this->db->where('pengguna_id', $id);
        $status = $this->db->update('pengguna',$tambah);
        $response = array();

         if ($status == true) {         
            $response['pesan'] = 'Update data berhasil';
            $response['status'] = 1;     
         } else {
            $response['pesan'] = 'Update data belum berhasil';
            $response ['status'] = 0;
         }

         echo json_encode($response); 
       
     }

    
}