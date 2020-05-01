<?php

class Rproduk extends CI_model {

  public function getAllRproduk(){
    $query = $this->db->get('reservasi_produk');
    return $query->result_array();
  }

  public function getRprodukById($id_reservasi){
    return $this->db->get_where('reservasi_produk',['id_reservasi' => $id_reservasi])->row_array();
  }

  private function id(){
    $this->load->helper('date');
    date_default_timezone_set('Asia/Jakarta');
    $u = uniqid();
    return date('dmy').$u;
  }

  public function tambahDataRproduk(){
    $id_reservasi = $this->id();
    $data = array(
      "id_reservasi" => $id_reservasi,
      'nama' => $this->input->post('nama',true),
      'phone' => $this->input->post('phone',true),
      'email' => $this->input->post('email',true),
      'tanggal' => $this->input->post('tanggal',true),
      'jam' => $this->input->post('jam',true),
      'jenis' => $this->input->post('jenis',true),
    );
    $this->db->insert('reservasi_produk',$data);
  }

  public function hapusDataRproduk($id_reservasi){
    $this->db->where('id_reservasi',$id_reservasi);
    $this->db->delete('reservasi_produk');
  }

  public function sudahDatangRproduk($id_reservasi){
    $status = 3;
    $data = [
      'status' => $status
    ];
    $this->db->where('id_reservasi',$id_reservasi);
    $this->db->update('reservasi_produk',$data);
  }

  public function sudahKonfirmasiRproduk($id_reservasi){
    $status = 2;
    $data = [
      'status' => $status
    ];
    $this->db->where('id_reservasi',$id_reservasi);
    $this->db->update('reservasi_produk',$data);
  }

  public function sudahSelesaiRproduk($id_reservasi){
    $status = 4;
    $data = [
      'status' => $status
    ];
    $this->db->where('id_reservasi',$id_reservasi);
    $this->db->update('reservasi_produk',$data);
  }
}
