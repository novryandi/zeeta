<?php

class Home extends CI_model {
  
  public function getAllHome(){
    $query = $this->db->get('home');
    return $query->result_array();
  }

  public function getHomeById($id_home){
    return $this->db->get_where('home',['id_home' => $id_home])->row_array();
  }

  public function ubahDataHome($id_home){
    $data1 = [
      'nama_home' => $this->input->post('nama_home',true),
      'foto_home' => $this->uploadPoster($id_home),
    ];
    $this->db->where('id_home',$id_home);
    $this->db->update('home',$data1);
  }

  public function hapusDataHome($id_home){
    $this->db->where('id_home',$id_home);
    $this->db->delete('home');
    $this->deletePoster($id_home);
  }

  private function uploadPoster($id_home){
    $config['upload_path'] = './upload/home/';
    $config['allowed_types'] = 'jpg|png';
    $config['file_name'] = $id_home;
    $config['overwrite'] = true;
    $config['max_size'] = 4096;
    // $config['max_widht'] = 1024;
    // $config['max_height'] = 768;

    $this->load->library('upload' , $config);

    if ($this->upload->do_upload('foto_home')) {
      return $this->upload->data("file_name");
    } else {
    //print_r($this->upload->display_errors());
    return "default.jpg";
    }
  }

  private function deletePoster($id_home){
    $home = $this->getHomeById($id_home);
    if ($home['foto'] != "default.jpg"){
      $filename = explode(".", $home->poster)[0];
      return array_map('unlink', glob(FCPATH."upload/home/$id_home.*"));
    }
  }
}
