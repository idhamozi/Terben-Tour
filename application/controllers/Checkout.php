<?php

/**
 *
 */
class Checkout extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Login');
    $this->load->model('M_GoogleLogin');
    $this->load->model('M_Paket');

  }

  function Booking()
  {
    if($this->input->post('submit') != null){
      if (!$this->session->userdata('user_data')) {
          $this->session->set_flashdata('warning', 'Silahkan login terlebih dahulu !!!');
          redirect(base_url('Login'),'refresh');
        }
    $paketUUID = uniqid();
    $user_id = $this->input->post('user_id');
    $google_id = $this->input->post('google_id');
    $paket_id = $this->input->post('paket_id');
    $harga = $this->input->post('harga');
    $tgl_pesan = date('m/d/yy');
    $tgl_berangkat = $this->input->post('PickDate');

    $this->M_Paket->bookingPaket($paketUUID, $user_id, $google_id, $paket_id, $harga, $tgl_pesan, $tgl_berangkat);

    $this->session->set_flashdata('sukses', 'Paket telah di Booking !!!');

    redirect(base_url('Checkout/Finalisasi/'.$paketUUID),'refresh');

    }
  }

  function Finalisasi($paketUUID)
  {
    if (!$this->session->userdata('user_data')) {
        $this->session->set_flashdata('warning', 'Silahkan login terlebih dahulu !!!');
        redirect(base_url('Login'),'refresh');
      }
      $data['booking'] = $this->M_Paket->getBooking($paketUUID);
      $paket_id = $data['booking'][0]->paket_id;
      $data['paket'] = $this->M_Paket->getPaket($paket_id);
      $harga = $data['paket'][0]->harga;
      $tax = $this->M_Paket->getPercentOfNumber($harga);
      $data['tax'] = $tax;
      $this->load->view('checkout/checkout',$data);
  }

  function Payment()
  {
    if($this->input->post('submit') != null){
    $user_data = $this->session->userdata('user_data');
    $username = $user_data['first_name'];

    $data = array();
    $paketUUID = uniqid();
    $config['upload_path'] = "./assets/frontend/images/users/transfer/";
    $config['allowed_types'] ='gif|jpg|jpeg|png|PNG';
    $config['max_size']      = 0; // KB
    $config['file_name'] = $username."_".$paketUUID;
    $config['overwrite'] = true;

    $this->load->library('upload',$config);

    $user_id = $this->input->post('user_id');
    $google_id = $this->input->post('google_id');
    $paket_id = $this->input->post('paket_id');
    $bank = $this->input->post('Bank');
    $namapengirim = $this->input->post('NamaPengirim');
    $harga = $this->input->post('harga');
    $email = $this->input->post('email');
    $temp_id = $this->input->post('temp_id');

    $imageupload = $this->upload->do_upload('image');
    $image = ($imageupload)? $this->upload->data('file_name'):NULL;

    $result = $this->M_Paket->insertPay($paketUUID, $user_id, $google_id, $paket_id, $bank, $namapengirim, $image, $harga, $email, $temp_id);

    $this->session->set_flashdata('sukses', 'Paket telah di Bayar !!!');

    redirect(base_url('Checkout/isPay'),'refresh');
    }
  }

  function isPay()
  {
    if (!$this->session->userdata('user_data')) {
        $this->session->set_flashdata('warning', 'Anda belum login !!!');
        redirect(base_url('Login'),'refresh');
    }
    $this->load->view('checkout/checkout-sukses');
  }
}
 ?>
