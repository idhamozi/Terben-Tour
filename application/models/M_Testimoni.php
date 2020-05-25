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

  function addTesti($id, $checkout_id, $user_id, $google_id, $paket_id, $testimoni, $rating)
  {
    $data = array(
      'testimoni_id' => $id,
      'checkout_id'  => $checkout_id,
      'user_id' => $user_id,
      'google_id' => $google_id,
      'paket_id' => $paket_id,
      'testimoni' => $testimoni,
      'rating' => $rating);

      $this->db->insert('testimoni',$data);
  }
}


 ?>
