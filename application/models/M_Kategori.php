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
}


 ?>
