<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	//Halaman Utama Website	- Homepage
	public function index()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
	}
	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ 