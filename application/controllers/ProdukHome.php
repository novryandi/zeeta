<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukHome extends CI_Controller {


	public function index()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/editPromoHome');
		$this->load->view('admin/footer');
	}
}