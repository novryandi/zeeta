<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PromoHome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Keamanan');
		$this->load->model('Promo');
		$this->load->model('Madmin');
	}

	public function index($id_promo)
	{
		$this->Keamanan->getKeamananAdm();

		$this->form_validation->set_rules('nama_promo','Nama','required');
		if($this->form_validation->run() == FALSE ){
		$data['promo'] = $this->Promo->getPromoById($id_promo);
		$isi['title'] = 'Klinik';
		$username = $this->session->userdata('username');
		$isi['admin'] = $this->Madmin->getAdminByUsername($username);
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/editPromoHome',$data);
		$this->load->view('admin/footer');
	} else {
		$this->Promo->ubahDataPromo($id_promo);
		redirect('AdminHome/home_promo');
	}
	}
}
