<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHome extends CI_Controller {

	public function index()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content_home');
		$this->load->view('admin/footer');
	}

	public function home_produk()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/produkHome');
		$this->load->view('admin/footer');
	}

	public function home_jasa()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/jasaHome');
		$this->load->view('admin/footer');
	}
}