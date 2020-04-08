<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data =array( 'title'	=>	'Zeta Salon',
						'isi'	=>	'home/list');

		$this->load->view('template/v_header');
		$this->load->view('login/login', $data);
		$this->load->view('template/v_footer');
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */