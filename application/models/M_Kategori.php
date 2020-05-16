<?php

/**
 *
 */
class M_Kategori extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function getKategori()
  {
    return $this->db->order_by('kategori_id')
    ->get('kategori')
    ->result();
  }

  function getKategoriName($kategoris){
  return $this->db->select('nama_kategori')
          ->from('kategori')
          ->where('kategori_id',$kategoris)
          ->get()
          ->result();
}

}


 ?>
