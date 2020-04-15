<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Produk');
		$this->load->model('Rproduk');
		$this->load->model('Jasa');
		$this->load->model('RJasa');
	}

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

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('phone','No Telpon','required|numeric');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('jumlah','Jumlah','required|numeric');

		if($this->form_validation->run() == FALSE){
			$isi['title'] = 'Klinik | Reservasi';

			$this->load->view('template/v_header', $isi);
			$this->load->view('home/reservasi');
			$this->load->view('template/v_footer');
		} else {
			$this->Rproduk->tambahDataRproduk();
			$this->session->set_flashdata('flash','mengajukan');
      redirect('Homepage/reservasi');
		}
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
