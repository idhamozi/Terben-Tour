<?php
/**
 *
 */
class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_User');
  }


}
 ?>
