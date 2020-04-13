<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {

			$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

			$this->load->view('template/v_header');
			$this->load->view('login/login', $data);
			$this->load->view('template/v_footer');
		}else{

			$this->auth();
		}
	}

	private function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$admin = $this->db->get_where('admin', ['username' => $username])->row_array();

		if($admin){

			if(password_verify($password, $admin['password'])){
				$data = [
					'username'=> $admin['username']
				];
				$this->session->set_userdata($data);
				redirect('admin');

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Wrong password
		  	</div>');
			redirect('auth');
			}

		}else{

			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			username is not registered
		  </div>');
			redirect('auth');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
