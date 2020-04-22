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
