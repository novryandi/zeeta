<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	//Halaman Utama Website	- Homepage
	public function index()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('home/home', $data);
		$this->load->view('template/v_footer');
	}

	public function katalog()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('home/katalog', $data);
		$this->load->view('template/v_footer');
	}

	public function reservasi()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('home/reservasi', $data);
		$this->load->view('template/v_footer');
	}

	public function jasa()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('home/jasa', $data);
		$this->load->view('template/v_footer');
	}

	public function produk()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('home/produk', $data);
		$this->load->view('template/v_footer');
	}

	public function login()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('home/login', $data);
		$this->load->view('template/v_footer');
	}
}
