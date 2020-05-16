<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
		$this->load->model('M_Kategori');
		$this->load->model('M_Paket');

	}

	public function index()
	{
		$data['ekonomi'] = $this->M_Paket->getPaketEko();
		$data['bisnis'] = $this->M_Paket->getPaketBis();
		$data['eksklusif'] = $this->M_Paket->getPaketEx();
		$this->load->view('home/index',$data);
	}
}
