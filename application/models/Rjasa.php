<?php

class Rjasa extends CI_model {

  public function getAllRjasa(){
    $query = $this->db->get('jasa');
    return $query->result_array();
  }

  public function getRjasaById($id_jasa){
    return $this->db->get_where('jasa',['id_jasa' => $id_jasa])->row_array();
  }

  private function id(){
    $this->load->helper('date');
    date_default_timezone_set('Asia/Jakarta');
    $u = uniqid();
    return date('dmy').$u;
  }

  public function tambahDataRjasa(){
    $id_reservasi = $this->id();
    $data = array(
      "id_reservasi" => $id_jasa,
      'nama_jasa' => $this->input->post('nama_jasa',true),
      'jenis_jasa' => $this->input->post('jenis_jasa',true),
      'harga_jasa' => $this->input->post('harga_jasa',true),
      'desc_jasa' => $this->input->post('desc_jasa',true),
      'banner_jasa' => $this->uploadPoster($id_jasa),
    );
    $this->db->insert('jasa',$data);
  }

  public function hapusDataRjasa($id_jasa){
    $this->db->where('id_jasa',$id_jasa);
    $this->db->delete('jasa');
  }

}
