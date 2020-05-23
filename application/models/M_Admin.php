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

  public function getAllAdmin()
  {
    return $this->db->get('admin');
  }

  function getAdminOn(){
    return $this->db->get_where('admin', array('is_active' => 1))->result();

  }

  public function delete_admin($admin_id)
  {
    $this->db->where('admin_id', $admin_id);
    $this->db->delete('admin');
  }
}

 ?>
