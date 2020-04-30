<?php

class Madmin extends CI_model {

  function __construct(){
     parent::__construct();
      $this->load->helper(array('form', 'url'));
    }

  public function getAllAdmin(){
    $query = $this->db->get('admin');
    return $query->result_array();
  }

  public function getAdminById($id_admin){
    return $this->db->get_where('admin',['id_admin' => $id_admin])->row_array();
  }

  public function getAdminByUsername($username){
    return $this->db->get_where('admin',['username' => $username])->row_array();
  }

  private function id(){
    $this->load->helper('date');
    date_default_timezone_set('Asia/Jakarta');
    $u = uniqid();
    return date('dmy').$u;
  }

  public function tambahAdmin($password){
    $id_admin = $this->id();
    $data = array(
      'id_admin' => $id_admin,
      'username' => $this->input->post('username',true),
      'password' => $password,
      'nama_admin' => $this->input->post('nama_admin',true),
      'foto_admin' => $this->uploadPoster($id_admin),
    );
    $this->db->insert('admin',$data);
  }

  public function ubahDataAdmin($id_admin,$password){
    $data = [
      'password' => $password,
      'nama_admin' => $this->input->post('nama_admin',true),
      'foto_admin' => $this->uploadPoster($id_admin)
    ];
    $this->db->where('id_admin',$id_admin);
    $this->db->update('admin',$data);
  }

  public function hapusDataAdmin($id_admin){
    $this->db->where('id_admin',$id_admin);
    $this->db->delete('admin');
    $this->deletePoster($id_admin);
  }

  private function uploadPoster($id_admin){
    $config['upload_path'] = './upload/admin/';
    $config['allowed_types'] = 'jpg|png';
    $config['file_name'] = $id_admin;
    $config['overwrite'] = true;
    $config['max_size'] = 4096;
    // $config['max_widht'] = 1024;
    // $config['max_height'] = 768;

    $this->load->library('upload' , $config);

    if ($this->upload->do_upload('foto_admin')) {
      return $this->upload->data("file_name");
    } else {
    //print_r($this->upload->display_errors());
    return "default.jpg";
    }
  }

  private function deletePoster($id_admin){
    $admin = $this->getAdminById($id_admin);
    if ($admin['foto_admin'] != "default.jpg"){
      $filename = explode(".", $admin->poster)[0];
      return array_map('unlink', glob(FCPATH."upload/admin/$id_admin.*"));
    }
  }

}
