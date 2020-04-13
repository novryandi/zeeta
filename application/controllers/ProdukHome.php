<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukHome extends CI_Controller {

	public function index()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/tambahProdukHome');
		$this->load->view('admin/footer');
	}

	public function edit_produk()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/editProdukHome');
		$this->load->view('admin/footer');
	}
}