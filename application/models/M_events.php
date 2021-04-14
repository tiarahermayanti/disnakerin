<?php
class M_events extends CI_Model{

	function get_all_events(){
		$hsl=$this->db->query("SELECT * FROM events ORDER BY event_id DESC");
		return $hsl;
	}

  

	function simpan_events($nama,$deskripsi, $jadwal, $alamat, $kuota, $gambar){
		$hsl=$this->db->query("INSERT INTO events(event_nama, event_deskripsi, event_jadwal, event_alamat, event_kuota, event_gambar) VALUES ('$nama','$deskripsi','$jadwal', '$alamat', '$kuota', '$gambar')");
		return $hsl;
	}

	function update_events($kode, $nama, $deskripsi, $jadwal, $alamat, $kuota, $gambar){
		$hsl=$this->db->query("UPDATE events SET event_nama='$nama', event_deskripsi = '$deskripsi', event_jadwal='$jadwal', event_alamat = '$alamat', event_kuota = '$kuota', event_gambar = '$gambar' WHERE event_id='$kode'");
		return $hsl;
	}

	function hapus_events($kode){
		$hsl=$this->db->query("DELETE FROM events WHERE event_id='$kode'");
		return $hsl;
	}

	function getValidasiEvent(){
	
    $this->db->select("*");
    $this->db->from("join_event, events, pengguna, detailikm");
    $this->db->where("join_event.id_event = events.event_id");
    $this->db->where("join_event.id_pengguna = pengguna.pengguna_id");
    $this->db->where("pengguna.ID_IKM = detailikm.ID_IKM");
    $this->db->where("join_event.status_join_event = 0");
    $hsl = $this->db->get();
    return $hsl;
  }

  function validEvent($kode){
    $hsl=$this->db->query("UPDATE join_event SET status_join_event = 1 WHERE id_join_event='$kode'");
    return $hsl;
  }

  function listTamu($kode){
  	$this->db->select("*");
    $this->db->from("join_event, events, pengguna, detailikm");
    $this->db->where("join_event.id_event = events.event_id");
    $this->db->where("join_event.id_pengguna = pengguna.pengguna_id");
    $this->db->where("pengguna.ID_IKM = detailikm.ID_IKM");
    $this->db->where("join_event.id_event='$kode'");
    $this->db->where("join_event.status_join_event != 0 ");
    $hsl = $this->db->get();
    return $hsl;
  }

  function today($kode){
    $this->db->select("*");
    $this->db->from("join_event, events, pengguna, detailikm");
    $this->db->where("join_event.id_event = events.event_id");
    $this->db->where("join_event.id_pengguna = pengguna.pengguna_id");
    $this->db->where("pengguna.ID_IKM = detailikm.ID_IKM");
    $this->db->where("join_event.id_event='$kode'");
    $this->db->where("join_event.status_join_event != 0 ");
    $this->db->where("join_event.status_join_event != 2 ");
    $this->db->where("join_event.status_join_event != 3 ");
    $hsl = $this->db->get();
    return $hsl;
  }

  function hadir($kode){
    $hsl=$this->db->query("UPDATE join_event SET status_join_event = 2 WHERE id_join_event='$kode'");
		return $hsl;
  }

  function tidakHadir($kode){
    $hsl=$this->db->query("UPDATE join_event SET status_join_event = 3 WHERE id_join_event='$kode'");
		return $hsl;
  }

  function get_join_event_ikm($kode){
    $this->db->select("events.event_id, events.event_nama, events.event_deskripsi, events.event_jadwal, events.event_alamat");
    $this->db->from("join_event, events, pengguna, detailikm");
    $this->db->where("join_event.id_event = events.event_id");
    $this->db->where("join_event.id_pengguna = pengguna.pengguna_id");
    $this->db->where("pengguna.ID_IKM = detailikm.ID_IKM");
    $this->db->where("detailikm.ID_IKM ='$kode'");
    $this->db->where("join_event.status_join_event != 0 ");
    $this->db->where("join_event.status_join_event != 1 ");
    $this->db->where("join_event.status_join_event != 3 ");
    $this->db->order_by("events.event_jadwal", "DESC");
    $hsl = $this->db->get();
    return $hsl;
  }

  public function get_keyword($keyword){
            $this->db->select('*');
            $this->db->from('events');
            $this->db->like('event_id',$keyword);
            $this->db->or_like('event_nama',$keyword);
            $this->db->or_like('event_jadwal',$keyword);
            $this->db->or_like('event_alamat',$keyword);
            return $this->db->get()->result();
  }

}