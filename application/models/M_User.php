<?php
/**
 *
 */
class M_User extends CI_Model
{

  // load database
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function cek_user($email)
  {
    return $this->db->get_where('users', ['email' => $email]);
  }

  public function update($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function updateProfile($user_id,$data){
  return $this->db->update('users',$data,"user_id = '$user_id'");
}

}
 ?>
