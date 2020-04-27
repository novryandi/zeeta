<?php

class Produk extends CI_model {

  public function getAllProduk(){
    $query = $this->db->get('produk');
    return $query->result_array();
  }

  public function getProdukById($id_produk){
    return $this->db->get_where('produk',['id_produk' => $id_produk])->row_array();
  }

  public function hitungJumlahProduk(){
    return $this->db->count_all('produk');
  }

  private function id(){
    $this->load->helper('date');
    date_default_timezone_set('Asia/Jakarta');
    $u = uniqid();
    return date('dmy').$u;
  }

  public function tambahDataProduk(){
    $data = array(
      'nama_produk' => $this->input->post('nama_produk',true),
      'harga_produk' => $this->input->post('harga_produk',true),
      'jumlah_produk' => $this->input->post('jumlah_produk',true),
    );
    $this->db->insert('produk',$data);
  }

  public function ubahDataProduk($id_produk){
    $data1 = [
      "nama_produk" => $this->input->post('nama_produk',true),
      'harga_produk' => $this->input->post('harga_produk',true),
      'jumlah_produk' => $this->input->post('jumlah_produk',true),
    ];
    $this->db->where('id_produk',$id_produk);
    $this->db->update('produk',$data1);
  }

  public function hapusDataProduk($id_produk){
    $this->db->where('id_produk',$id_produk);
    $this->db->delete('produk');
  }

  private function uploadPoster($id_produk){
    $config['upload_path'] = './upload/produk/';
    $config['allowed_types'] = 'jpg|png';
    $config['file_name'] = $id_produk;
    $config['overwrite'] = true;
    $config['max_size'] = 4096;
    // $config['max_widht'] = 1024;
    // $config['max_height'] = 768;

    $this->load->library('upload' , $config);

    if ($this->upload->do_upload('poster')) {
      return $this->upload->data("file_name");
    } else {
    //print_r($this->upload->display_errors());
    return "default.jpg";
    }
  }

  private function deletePoster($id_produk){
    $produk = $this->getProdukById($id_produk);
    if ($produk['banner_produk'] != "default.jpg"){
      $filename = explode(".", $produk->poster)[0];
      return array_map('unlink', glob(FCPATH."upload/produk/$id_produk.*"));
    }
  }

}
