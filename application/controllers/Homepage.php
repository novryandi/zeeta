<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	//Halaman Utama Website	- Homepage
	public function index()
	{
		$isi['title'] = 'Klinik | Home';

		$this->load->view('template/v_header', $isi);
		$this->load->view('home/home');
		$this->load->view('template/v_footer');
	}

	public function katalog()
	{
		$isi['title'] = 'Klinik | Katalog';
		$this->load->view('template/v_header', $isi);
		$this->load->view('home/katalog');
		$this->load->view('template/v_footer');
	}

	public function reservasi()
	{
		$isi['title'] = 'Klinik | Reservasi';

		$this->load->view('template/v_header', $isi);
		$this->load->view('home/reservasi');
		$this->load->view('template/v_footer');
	}

	public function jasa()
	{
		$isi['title'] = 'Klinik | jasa';

		$this->load->view('template/v_header', $isi);
		$this->load->view('home/jasa');
		$this->load->view('template/v_footer');
	}

	public function produk()
	{
		$isi['title'] = 'Klinik | Produk';

		$this->load->view('template/v_header', $isi);
		$this->load->view('home/produk');
		$this->load->view('template/v_footer');
	}

	public function login()
	{
		$isi['title'] = 'Klinik | Login';

		$this->load->view('template/v_header', $isi);
		$this->load->view('home/login');
		$this->load->view('template/v_footer');
	}

}
