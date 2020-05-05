<?php

class Promo extends CI_model {

  public function getAllPromo(){
    $query = $this->db->get('promo');
    return $query->result_array();
  }

  public function getPromoById($id_promo){
    return $this->db->get_where('promo',['id_promo' => $id_promo])->row_array();
  }

  public function ubahDataPromo($id_promo){
    $data1 = [
      'nama_promo' => $this->input->post('nama_promo',true),
      'foto_promo' => $this->uploadPoster($id_promo),
    ];
    $this->db->where('id_promo',$id_promo);
    $this->db->update('promo',$data1);
  }

  public function hapusDataPromo($id_promo){
    $this->db->where('id_promo',$id_promo);
    $this->db->delete('promo');
    $this->deletePoster($id_promo);
  }

  private function uploadPoster($id_promo){
    $config['upload_path'] = './upload/promo/';
    $config['allowed_types'] = 'jpg|png';
    $config['file_name'] = $id_promo;
    $config['overwrite'] = true;
    $config['max_size'] = 4096;
    // $config['max_widht'] = 1024;
    // $config['max_height'] = 768;

    $this->load->library('upload' , $config);

    if ($this->upload->do_upload('foto_promo')) {
      return $this->upload->data("file_name");
    } else {
    //print_r($this->upload->display_errors());
    return "default.jpg";
    }
  }

  private function deletePoster($id_promo){
    $promo = $this->getPromoById($id_promo);
    if ($promo['foto'] != "default.jpg"){
      $filename = explode(".", $promo->poster)[0];
      return array_map('unlink', glob(FCPATH."upload/promo/$id_promo.*"));
    }
  }

}
