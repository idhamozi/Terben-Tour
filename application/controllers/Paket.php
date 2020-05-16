<?php

/**
 *
 */
class Paket extends CI_Controller
{


    function __construct()
    {
      parent::__construct();
      $this->load->model('M_Admin');
      $this->load->model('M_Kategori');
      $this->load->model('M_Paket');

    }

    function index()
    {
      $data['paket'] = $this->M_Paket->getAllPaket();
      $data['kategori'] = $this->M_Kategori->getKategori();
      $this->load->view('paket/paket',$data);
    }

    function Kategori($kategori_id)
    {
      $data['paket'] = $this->M_Paket->getPaketKategori($kategori_id);
      $this->load->view('paket/byKategori',$data);
    }

    function Detail($paket_id)
    {
      $data['paket'] = $this->M_Paket->getPaket($paket_id);
      $data['kategori'] = $this->M_Kategori->getKategori();
      $this->load->view('details/details',$data);
    }


}


 ?>
