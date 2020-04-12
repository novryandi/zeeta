<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$isi['title'] = 'Barang | Zeeta';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content_barang');
		$this->load->view('admin/footer');
	}

	public function Tambah()
	{
		$isi['title'] = 'Barang | Zeeta';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/tambah_stokbarang');
		$this->load->view('admin/footer');
	}

	public function Edit()
	{
		$isi['title'] = 'Barang | Zeeta';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/edit_stokbarang');
		$this->load->view('admin/footer');
	}

}
