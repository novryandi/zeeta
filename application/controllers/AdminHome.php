<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Keamanan');
		$this->load->model('Jasa');
		$this->load->model('Promo');
		$this->load->model('Home');
		$this->load->model('Madmin');
	}

	public function index()
	{
		$this->Keamanan->getKeamananAdm();
		$id_home = 1;
		$this->form_validation->set_rules('nama_home','Jumlah','required');
		$this->form_validation->set_rules('deskripsi_home','Deskripsi','required');
		if($this->form_validation->run() == FALSE ){
		$username = $this->session->userdata('username');
		$isi['admin'] = $this->Madmin->getAdminByUsername($username);
		$data['home'] = $this->Home->getHomeById($id_home);
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content_home',$data);
		$this->load->view('admin/footer');
	} else {
		$this->Home->ubahDataHome($id_home);
		redirect('admin');
	}
	}

	public function home_promo()
	{
		$this->Keamanan->getKeamananAdm();
		$data['promo'] = $this->Promo->getAllPromo();
		$username = $this->session->userdata('username');
		$isi['admin'] = $this->Madmin->getAdminByUsername($username);
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/promoHome',$data);
		$this->load->view('admin/footer');
	}

	public function home_jasa()
	{
		$this->Keamanan->getKeamananAdm();
		$data['jasa'] = $this->Jasa->getAllJasa();
		$username = $this->session->userdata('username');
		$isi['admin'] = $this->Madmin->getAdminByUsername($username);
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/jasaHome',$data);
		$this->load->view('admin/footer');
	}
}
