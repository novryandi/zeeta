<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Keamanan');
		$this->load->model('Madmin');
	}

	//Halaman Utama Website	- Homepage
	public function index()
	{
		$this->Keamanan->getKeamananAdm();
		$username = $this->session->userdata('username');

		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
	}

	public function profil()
	{
		$this->Keamanan->getKeamananAdm();
		$username = $this->session->userdata('username');
		$data['admin'] = $this->Madmin->getAdminByUsername($username);
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/profileadmin',$data);
		$this->load->view('admin/footer');
	}

	public function logout(){
      $this->session->sess_destroy();
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			you have been log out
		  </div>');
		redirect('Homepage');
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
