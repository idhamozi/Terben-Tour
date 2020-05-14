<?php
/**
 *
 */
class M_Paket extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function insertPaket($id, $title, $deskripsi, $image, $kategori , $durasi, $max_person, $harga)
  {
    $user_data = $this->session->userdata('admin_data');
    $username = $user_data['admin_id'];
    $data = array(	'paket_id' => $id,
          'admin_id' => $username,
          'img_paket' => $image,
          'judul' => $title,
          'deskripsi' => $deskripsi,
          'max_person' => $max_person,
          'durasi' => $durasi,
          'harga' => $harga);
  }
}

 ?>
