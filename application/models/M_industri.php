<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Industri extends CI_Model {

	var $table = 'industri';
	var $column_order = array(null, 'NAMA_PERUSAHAAN','ALAMAT','KELURAHAN','KECAMATAN','PIMPINAN','BENTUK_USAHA','TIPE_INDUSTRI','KBLI','JENIS_PRODUK'); //set column field database for datatable orderable
	var $column_search = array('NAMA_PERUSAHAAN','ALAMAT','KELURAHAN','KECAMATAN','PIMPINAN','BENTUK_USAHA','TIPE_INDUSTRI','KBLI','JENIS_PRODUK'); //set column field database for datatable searchable 
	var $order = array('ID_IKM' => 'asc'); // default order 


	private function _get_datatables_query()
	{
		
		//add custom filter here
		if($this->input->post('BENTUK_USAHA'))
		{
			$this->db->where('BENTUK_USAHA', $this->input->post('BENTUK_USAHA'));
		}
		if($this->input->post('NAMA_PERUSAHAAN'))
		{
			$this->db->like('NAMA_PERUSAHAAN', $this->input->post('NAMA_PERUSAHAAN'));
		}
		if($this->input->post('KELURAHAN'))
		{
			$this->db->like('KELURAHAN', $this->input->post('KELURAHAN'));
		}
		if($this->input->post('KECAMATAN'))
		{
			$this->db->like('KECAMATAN', $this->input->post('KECAMATAN'));
		}
		if($this->input->post('TIPE_INDUSTRI'))
		{
			$this->db->like('TIPE_INDUSTRI', $this->input->post('TIPE_INDUSTRI'));
		}

		$this->db->from($this->table);
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	public function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	
}
