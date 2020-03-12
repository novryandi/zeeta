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
}
