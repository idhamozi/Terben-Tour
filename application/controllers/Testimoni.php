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

  function inputTesti()
  {
    $checkout_id = $this->input->get('checkout_id');
    if ($checkout_id == 0) {
      $this->session->set_flashdata('warning', 'Silahkan Pesan Paket dulu !!!');
      redirect(base_url(''),'refresh');
    }
    $data['paket'] = $this->M_Paket->checkoutData($checkout_id);
    $this->load->view('testimonial/form_testimoni', $data);
  }

  function uploadTesti()
  {
    if($this->input->post('submit') != null){
      $testimoniUUID = uniqid();
      $checkout_id = $this->input->post('checkout_id');
      $user_id = $this->input->post('user_id');
      $google_id = $this->input->post('google_id');
      $paket_id = $this->input->post('paket_id');

      $testimoni = $this->input->post('Testimoni');
      $rating = $this->input->post('Score');

      $this->M_Testimoni->addTesti($testimoniUUID, $checkout_id, $user_id, $google_id, $paket_id, $testimoni, $rating);

      $this->session->set_flashdata('sukses', 'Testimoni telah ditambah !!!');

      redirect(base_url('Testimoni/All'),'refresh');
    }
  }

}
 ?>
