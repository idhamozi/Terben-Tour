<?php
/**
 *
 */
class M_Admin extends CI_Model
{

  // load database
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function register_admin($data)
  {
    $this->db->insert('admin', $data);
  }
}

 ?>
