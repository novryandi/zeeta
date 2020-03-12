<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	//Halaman Utama Website	- Homepage
	public function index()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('produk/produk1', $data);
		$this->load->view('template/v_footer');

	}

	public function produk2()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('produk/produk2', $data);
		$this->load->view('template/v_footer');

	}
}
