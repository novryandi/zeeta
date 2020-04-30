<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Keamanan');
		$this->load->model('Madmin');
	}

	//Halaman Utama Website	- Homepage
	public function index()
	{
		$this->Keamanan->getKeamananAdm();

		$this->form_validation->set_rules('nama_admin','Nama','required');
		$this->form_validation->set_rules('username','Username','required|is_unique[admin.username]');
		$this->form_validation->set_rules('password','Password','required|min_length[6]|matches[password1]');
		$this->form_validation->set_rules('password1','Password','required');

		if($this->form_validation->run() == FALSE){
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/tambah_pengguna');
		$this->load->view('admin/footer');
	} else {
		$password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
		$this->Madmin->tambahAdmin($password);
		redirect('Admin/profil');
	}
	}

	public function edit($id_admin)
	{
		$this->Keamanan->getKeamananAdm();
		$data['admin'] = $this->Madmin->getAdminById($id_admin);

		$this->form_validation->set_rules('nama_admin','Nama','required');
		$this->form_validation->set_rules('password','Password','required|min_length[6]|matches[password1]');
		$this->form_validation->set_rules('password1','Password','required');

		if($this->form_validation->run() == FALSE){
		$isi['title'] = 'Klinik';
		$this->load->view('admin/header', $isi);
		$this->load->view('admin/edit_pengguna',$data);
		$this->load->view('admin/footer');
	} else {
		$password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
		$this->Madmin->ubahDataAdmin($id_admin,$password);
		redirect('Admin/profil');
	}
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
