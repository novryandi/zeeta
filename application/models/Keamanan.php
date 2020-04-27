<?php

class Keamanan extends CI_model {

  public function getKeamananAdm(){
    $username = $this->session->userdata('username');
    if(empty($username)){
      $this->session->sess_destroy();
      redirect('Login');
    }
  }
}
