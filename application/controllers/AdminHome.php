<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Keamanan');
		$this->load->model('Jasa');
	}

	public function index()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content_home');
		$this->load->view('admin/footer');
	}

	public function home_promo()
	{
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/promoHome');
		$this->load->view('admin/footer');
	}

	public function home_jasa()
	{
		$this->Keamanan->getKeamananAdm();
		$data['jasa'] = $this->Jasa->getAllJasa();
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/jasaHome',$data);
		$this->load->view('admin/footer');
	}
}
