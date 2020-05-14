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

  function getKategoriName($kategori_id){
  return $this->db->select('nama_kategori')
          ->from('kategori')
          ->or_where_in('kategori_id',$kategori_id)
            ->order_by('kategori_id')
          ->get()
          ->result();
}

}


 ?>
