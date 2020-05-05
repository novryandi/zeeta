<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Produk');
		$this->load->model('Jasa');
	}

	public function index($id_produk)
	{
		$data['produk'] = $this->Produk->getProdukById($id_produk);
		$isi =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header',$isi);
		$this->load->view('produk/produk1', $data);
		$this->load->view('template/v_footer');

	}

	public function produk2($id_jasa)
	{
		$data['jasa'] = $this->Jasa->getJasaById($id_jasa);
		$isi =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header',$isi);
		$this->load->view('produk/produk2', $data);
		$this->load->view('template/v_footer');

	}
}
