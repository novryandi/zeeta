<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function index()
	{
		$isi['title'] = 'Barang | Zeeta';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content_reservasi');
		$this->load->view('admin/footer');
	}

}
