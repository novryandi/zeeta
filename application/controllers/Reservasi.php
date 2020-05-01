<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Keamanan');
		$this->load->model('Rproduk');
	}

	public function index()
	{
		$this->Keamanan->getKeamananAdm();
		$data['produk'] = $this->Rproduk->getAllRproduk();
		$isi['title'] = 'Barang | Zeeta';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content_reservasi',$data);
		$this->load->view('admin/footer');
	}

	public function hapus($id_reservasi){
		$this->Keamanan->getKeamananAdm();
		$this->Rproduk->hapusDataRproduk($id_reservasi);
		redirect('Reservasi');
	}

	public function sudahDatang($id_reservasi){
		$this->Keamanan->getKeamananAdm();
		$this->Rproduk->sudahDatangRproduk($id_reservasi);
		redirect('Reservasi');
	}

	public function sudahKonfirmasi($id_reservasi){
		$this->Keamanan->getKeamananAdm();
		$this->Rproduk->sudahKonfirmasiRproduk($id_reservasi);
		redirect('Reservasi');
	}

	public function sudahSelesai($id_reservasi){
		$this->Keamanan->getKeamananAdm();
		$this->Rproduk->sudahSelesaiRproduk($id_reservasi);
		redirect('Reservasi');
	}

}
