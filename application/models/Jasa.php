<?php

class Jasa extends CI_model {

  public function getAllJasa(){
    $query = $this->db->get('jasa');
    return $query->result_array();
  }

  public function getJasaById($id_jasa){
    return $this->db->get_where('jasa',['id_jasa' => $id_jasa])->row_array();
  }

  public function hitungJumlahJasa(){
    return $this->db->count_all('jasa');
  }

  private function id(){
    $this->load->helper('date');
    date_default_timezone_set('Asia/Jakarta');
    $u = uniqid();
    return date('dmy').$u;
  }

  public function tambahDataJasa(){
    $id_jasa = $this->id();
    $data = array(
      "id_jasa" => $id_jasa,
      'nama_jasa' => $this->input->post('nama_jasa',true),
      'deskripsi_jasa' => $this->input->post('deskripsi_jasa',true),
      'harga_jasa' => $this->input->post('harga_jasa',true),
      'foto_jasa' => $this->uploadPoster($id_jasa),
    );
    $this->db->insert('jasa',$data);
  }

  public function ubahDataJasa($id_jasa){
    $data1 = [
      "nama_jasa" => $this->input->post('nama_jasa',true),
      'deskripsi_jasa' => $this->input->post('deskripsi_jasa',true),
      'harga_jasa' => $this->input->post('harga_jasa',true),
      "foto_jasa" => $this->uploadPoster($id_jasa),
    ];
    $this->db->where('id_jasa',$id_jasa);
    $this->db->update('jasa',$data1);
  }

  public function hapusDataJasa($id_jasa){
    $this->db->where('id_jasa',$id_jasa);
    $this->db->delete('jasa');
    $this->deletePoster($id_jasa);
  }

  private function uploadPoster($id_jasa){
    $config['upload_path'] = './upload/jasa/';
    $config['allowed_types'] = 'jpg|png';
    $config['file_name'] = $id_jasa;
    $config['overwrite'] = true;
    $config['max_size'] = 4096;
    // $config['max_widht'] = 1024;
    // $config['max_height'] = 768;

    $this->load->library('upload' , $config);

    if ($this->upload->do_upload('foto_jasa')) {
      return $this->upload->data("file_name");
    } else {
    print_r($this->upload->display_errors());
    //return "default.jpg";
    }
  }

  private function deletePoster($id_jasa){
    $jasa = $this->getJasaById($id_jasa);
    if ($jasa['banner_jasa'] != "default.jpg"){
      $filename = explode(".", $jasa->poster)[0];
      return array_map('unlink', glob(FCPATH."upload/jasa/$id_jasa.*"));
    }
  }

}
