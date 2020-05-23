<?php
defined('BASEPATH') OR exit ('No direct script allowed');

/**
 *
 */
class Testimoni extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_User');
    $this->load->model('M_Paket');
    $this->load->model('M_Testimoni');
  }

  function All()
  {
    $data['testimoni'] = $this->M_Testimoni->getAllTestimoni();
    $data['users'] = $this->M_User->getAllUser();
    $data['users_google'] = $this->M_User->getAllUserGoogle();
    $data['paket'] = $this->M_Paket->getAllPaket();
    $this->load->view('testimonial/testimoni', $data);
  }

}
 ?>
