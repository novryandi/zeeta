<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	//Halaman Utama Website	- Homepage
	public function index()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/tambah_pengguna');
		$this->load->view('admin/footer');
	}

	public function edit()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/edit_pengguna');
		$this->load->view('admin/footer');
	}
	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ 