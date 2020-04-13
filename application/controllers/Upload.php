<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function index()
	{
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name']))
	    {
	        if ($this->upload->do_upload('filefoto'))
	            {
	                $gbr = $this->upload->data();
	                $gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
					$judul=strip_tags($this->input->post('judul'));
					$this->m_upload->simpan_upload($judul,$gambar);
					echo "Upload Berhasil";
				}else{
	                echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
	            }
	                 
	        }else{
				echo "Gagal, gambar belum di pilih";
		}
				
	}