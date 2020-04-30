<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Keamanan');
		$this->load->model('Produk');
	}

	public function index()
	{
		$this->Keamanan->getKeamananAdm();
		$data['produk'] = $this->Produk->getAllProduk();
		$isi['title'] = 'Barang | Zeeta';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content_barang',$data);
		$this->load->view('admin/footer');
	}

	public function Tambah()
	{
		$this->Keamanan->getKeamananAdm();
		$this->form_validation->set_rules('nama_produk','Nama','required');
		$this->form_validation->set_rules('harga_produk','Harga','required|numeric');
		$this->form_validation->set_rules('jumlah_produk','Jumlah','required|numeric');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		if($this->form_validation->run() == FALSE ){
		$isi['title'] = 'Barang | Zeeta';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/tambah_stokbarang');
		$this->load->view('admin/footer');
	} else {
		$this->Produk->tambahDataProduk();
		$this->session->set_flashdata('flash','mengajukan');
		redirect('Barang');
	}
	}

	public function Edit($id_produk)
	{
		$this->Keamanan->getKeamananAdm();
		$this->form_validation->set_rules('nama_produk','Nama','required');
		$this->form_validation->set_rules('harga_produk','Harga','required|numeric');
		$this->form_validation->set_rules('jumlah_produk','Jumlah','required|numeric');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$data['produk'] = $this->Produk->getProdukById($id_produk);
		if($this->form_validation->run() ==  FALSE){
		$isi['title'] = 'Barang | Zeeta';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/edit_stokbarang',$data);
		$this->load->view('admin/footer');
	} else {
		$this->Produk->ubahDataProduk($id_produk);
		redirect('Barang');
	}
	}

	public function Hapus($id_produk){
		$this->Keamanan->getKeamananAdm();
		$this->Produk->hapusDataProduk($id_produk);
		redirect('Barang');
	}

}
