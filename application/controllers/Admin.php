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

	public function stokbarang()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('admin/header', $data);
		$this->load->view('admin/stokbarang', $data);
		$this->load->view('admin/footer', $data);
	}

	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */ 