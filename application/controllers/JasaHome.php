<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JasaHome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Keamanan');
		$this->load->model('Jasa');
		$this->load->model('Madmin');
	}

	public function index()
	{
	$this->Keamanan->getKeamananAdm();
	$this->form_validation->set_rules('nama_jasa','Nama','required');
	$this->form_validation->set_rules('deskripsi_jasa','Deskripsi','required');
	$this->form_validation->set_rules('harga_jasa','Harga','required|numeric');
	if($this->form_validation->run() == FALSE ){
		$isi['title'] = 'Klinik';
		$username = $this->session->userdata('username');
		$isi['admin'] = $this->Madmin->getAdminByUsername($username);
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/tambahProdukJasa');
		$this->load->view('admin/footer');
	} else {
		$this->Jasa->tambahDataJasa();
		redirect('AdminHome/home_jasa');
	}
	}

	public function edit_jasa($id_jasa)
	{
		$this->Keamanan->getKeamananAdm();
		$this->form_validation->set_rules('nama_jasa','Nama','required');
		$this->form_validation->set_rules('deskripsi_jasa','Deskripsi','required');
		$this->form_validation->set_rules('harga_jasa','Harga','required|numeric');
		if($this->form_validation->run() == FALSE ){
		$data['jasa'] = $this->Jasa->getJasaById($id_jasa);
		$isi['title'] = 'Klinik';
		$username = $this->session->userdata('username');
		$isi['admin'] = $this->Madmin->getAdminByUsername($username);
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/editJasaHome',$data);
		$this->load->view('admin/footer');
	} else {
		$this->Jasa->ubahDataJasa($id_jasa);
		redirect('AdminHome/home_jasa');
	}
	}

	public function hapus($id_jasa){
		$this->Keamanan->getKeamananAdm();
		$this->Jasa->hapusDataJasa($id_jasa);
		redirect('AdminHome/home_jasa');
	}
}
