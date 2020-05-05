<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Produk');
		$this->load->model('Home');
		$this->load->model('Jasa');
		$this->load->model('Promo');
	}

	//Halaman Utama Website	- Homepage
	public function index()
	{
		$id = 1;
		$data['home'] = $this->Home->getHomeById($id);
		$data['promo'] = $this->Promo->getAllPromo();
		$isi['title'] = 'Klinik | Home';

		$this->load->view('template/v_header', $isi);
		$this->load->view('home/home',$data);
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
		$this->form_validation->set_rules('tanggal','Tanggal Reservasi','required');
		$this->form_validation->set_rules('jam','Jam Reservasi','required');
		$this->form_validation->set_rules('jenis','Jenis Reservasi','required');

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
		$data['jasa'] = $this->Jasa->getAllJasa();
		$isi['title'] = 'Klinik | jasa';

		$this->load->view('template/v_header', $isi);
		$this->load->view('home/jasa',$data);
		$this->load->view('template/v_footer');
	}

	public function produk()
	{
		$data['produk'] = $this->Produk->getAllProduk();
		$isi['title'] = 'Klinik | Produk';

		$this->load->view('template/v_header', $isi);
		$this->load->view('home/produk',$data);
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
