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

  function insertPaket($id, $kategori , $image, $title, $deskripsi, $max_person, $durasi,  $harga)
  {
    $user_data = $this->session->userdata('admin_data');
    $username = $user_data['admin_id'];
    $data = array(	'paket_id' => $id,
          'admin_id' => $username,
          'kategori_id' => $kategori,
          'img_paket' => $image,
          'judul' => $title,
          'deskripsi' => $deskripsi,
          'max_person' => $max_person,
          'durasi' => $durasi,
          'harga' => $harga);

    $result = $this->db->insert('paket',$data);

  }

  function updatePaket($id, $kategori , $image, $title, $deskripsi, $max_person, $durasi,  $harga)
  {
    $oldimgPaket = $this->getPaket($id);
    if(!isset($image)){
      $image = $oldimgPaket[0]->img_paket;
    }
    $user_data = $this->session->userdata('admin_data');
    $username = $user_data['admin_id'];
    $data = array(	'paket_id' => $id,
          'admin_id' => $username,
          'kategori_id' => $kategori,
          'img_paket' => $image,
          'judul' => $title,
          'deskripsi' => $deskripsi,
          'max_person' => $max_person,
          'durasi' => $durasi,
          'harga' => $harga);

    $result = $this->db->replace('paket',$data);
  }

  function getAllPaket(){
		return $this->db->get('paket')->result();

	}

  function getPaket($paket_id){
  $paket = $this->db->get_where('paket',array('paket_id'=>$paket_id))
          ->result();

  return $paket;
  }

  public function delete_paket($paket_id)
  {
    $this->db->where('paket_id', $paket_id);
    $this->db->delete('paket');
  }
}

 ?>
