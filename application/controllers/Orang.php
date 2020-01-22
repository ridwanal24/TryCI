<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//Load Helper
		$this->load->helper(array('url'));

		//Load Model
		$config = array(
			'hostname' => 'localhost',
			'username' => 'ridwan',
			'password' => 'ridwan',
			'database' => 'orang',
			'dbdriver' => 'mysqli');
		$this->load->model('orang_model','',$config);
	}

	public function view($id = NULL)
	{
		if ($id == NULL) {
			$data['data'] = $this->orang_model->get_data();
			$this->load->view('main_menu',$data);
		} else {
			$data['data'] = $this->orang_model->get_data($id);
			$this->load->view('item',$data);
		}
	}

	public function tambah()
	{
		$data['nama'] = $this->input->get('nama');
		$data['no_telp'] = $this->input->get('no_telp');
		$data['kota'] = $this->input->get('kota');
		$data['provinsi'] = $this->input->get('provinsi');
		$query = $this->orang_model->add_data($data);
		if ($query) {
			redirect(site_url());
		} else if ($query) {
			$this->load->view('add_data',$data);
		}
		$this->load->view('add_data',$data);
	}

	public function hapus($id = NULL)
	{
		if ($id == NULL) {
			redirect(site_url());
		} else {
			$query = $this->orang_model->delete_data($id);
			if ($query) {
				redirect(site_url());	
			} else {
				echo "ERROR";
			}
		}
	}

	public function edit($id = NULL)
	{
		if ($id == NULL) {
			$data['id'] = $this->input->get('id');
			$data['nama'] = $this->input->get('nama');
			$data['no_telp'] = $this->input->get('no_telp');
			$data['kota'] = $this->input->get('kota');
			$data['provinsi'] = $this->input->get('provinsi');
			$query = $this->orang_model->update_data($data);
			if ($query) {
				redirect(site_url());
			} else if ($query) {
				$this->load->view('edit_data',$data);
			}
		}

		$data['data'] = $this->orang_model->get_data($id);
		$this->load->view('edit_data', $data);
	}


}

/* End of file Orang.php */
/* Location: ./application/controllers/Orang.php */