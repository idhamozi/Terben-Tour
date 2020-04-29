<?php

  /**
   *
   */
  class M_Login extends CI_Model
  {

    // load database
  	public function __construct()
  	{
  		parent::__construct();
  		$this->load->database();
  	}

    // Tambah User
  	public function register($data)
  	{
  		$this->db->insert('users', $data);
  	}

    public function token($users_token)
    {
      $this->db->insert('users_token', $users_token);
    }

    public function user_target($email)
    {
      return $this->db->get_where('users', ['email' => $email]);
    }

    public function user_token($token)
    {
      return $this->db->get_where('users_token', ['token' => $token]);
    }

    public function verify($email)
    {
      $this->db->set('is_active', 1);
      $this->db->where('email', $email);
      $this->db->update('users');

      $this->db->where('email', $email);
      $this->db->delete('users_token');
    }

    public function verify_expired($email)
    {
      $this->db->where('email', $email);
      $this->db->delete('users');

      $this->db->where('email', $email);
      $this->db->delete('users_token');
    }

    public function change_password($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);

      $this->db->where($where);
      $this->db->delete('users_token');
    }

    // Login
    public function login($username)
    {

    $this->db->select('*')
             ->from('users')
             // where
             ->where('username', $username);
    return $this->db->get();

    }

  }


 ?>
