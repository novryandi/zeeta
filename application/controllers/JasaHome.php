<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JasaHome extends CI_Controller {

	public function index()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/tambahProdukJasa');
		$this->load->view('admin/footer');
	}

	public function edit_jasa()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/editJasaHome');
		$this->load->view('admin/footer');
	}
}