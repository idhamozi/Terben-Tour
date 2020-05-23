<?php

/**
 *
 */
class M_Testimoni extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function getAllTestimoni(){
    return $this->db->get('testimoni')->result();

  }

  public function DeleteTesti($testimoni_id)
  {
    $this->db->where('testimoni_id', $testimoni_id);
    $this->db->delete('testimoni');
  }
}


 ?>
