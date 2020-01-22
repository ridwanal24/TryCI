<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orang_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_data($id = NULL)
	{
		if ($id == NULL) {
			$this->db->select('id,nama');
			$this->db->from('orang');
			$query = $this->db->get();
			return $query->result_array();
		} else {
			$this->db->select('*');
			$this->db->from('orang');
			$this->db->where('id', $id);
			$query = $this->db->get();
			return $query->row_array();
		}
	}

	public function add_data($data)
	{
		$nama = $data['nama'];
		$no_telp = $data['no_telp'];
		$kota = $data['kota'];
		$provinsi = $data['provinsi'];
		$query = $this->db->query("insert into orang(nama,no_telp,kota,provinsi) values ('$nama','$no_telp','$kota','$provinsi')");
		return $query;
	}

	public function delete_data($id = NULL)
	{
		$query = $this->db->query('delete from orang where id='.$id);
		return $query;
	}

	public function update_data($data)
	{
		$id = $data['id'];
		$nama = $data['nama'];
		$no_telp = $data['no_telp'];
		$kota = $data['kota'];
		$provinsi = $data['provinsi'];
		$query = $this->db->query("update orang set nama='$nama',no_telp='$no_telp',kota='$kota',provinsi='$provinsi' where id=$id");
		return $query;
	}

}

/* End of file Orang_model.php */
/* Location: ./application/models/Orang_model.php */