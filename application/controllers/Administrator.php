<?php
defined('BASEPATH') OR exit ('No direct script allowed');
/**
 *
 */
class Administrator extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_Login');
  }

  function index()
  {
    // Validasi
    $validasi 	= $this->form_validation;
    $validasi->set_rules('username','Username','required|is_unique[users.username]');
    $validasi->set_rules('password','Password','required');

    //set message form validation
  $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
  <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi !!!</div></div>');

  if($validasi->run() === TRUE) {

    $username 	= htmlspecialchars($this->input->post('username'),ENT_QUOTES);
    $password 	= htmlspecialchars($this->input->post('password'),ENT_QUOTES);

    $ambildata = $this->M_Login->login_admin($username)->num_rows();
    $admin = $this->M_Login->login_admin($username)->row();

    if ($ambildata == 0 || $ambildata > 1 ) {
      // Kalau ga ada user yg cocok, suruh login lagi
      $this->session->set_flashdata('warning', 'Username/Password salah');
      redirect(base_url('Administrator'),'refresh');

    } else {
      if (password_verify($password, $admin->password)) {

            $admin_data = array(
              'admin_id' => $admin->admin_id,
              'nama_admin' => $admin->nama_admin,
              'username' => $username
            );

            // Create session utk login
            $this->session->set_userdata('admin_data', $admin_data);

            // Lalu set flashdata Berhasil Login
            $this->session->set_flashdata('sukses', 'Anda berhasil login');

            // Jika ga ada, default masuk ke halaman dasbor
            redirect(base_url('Administrator/Dashboard'),'refresh');

      } else {
        // Kalau ga ada user yg cocok, suruh login lagi
        $this->session->set_flashdata('warning', 'Username/Password salah');
        redirect(base_url('Administrator'),'refresh');
      }
    }

  }
  // End validasi
  $this->load->view('admin/login_admin', FALSE);
  }

  function Dashboard()
  {
    $this->load->view('admin/dashboard');
  }

  function Add_admin()
  {
    // Validasi
    $validasi 	= $this->form_validation;
    $validasi->set_rules('username','Username','required|is_unique[users.username]');
    $validasi->set_rules('password','Password','required');

    //set message form validation
  $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
  <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi !!!</div></div>');

  if($validasi->run()===FALSE) {
  // End validasi

  $this->load->view('admin/admin', FALSE);
  // Masuk ke database
  }else{

      $input = $this->input;
      $bcrypt = password_hash($input->post('password'), PASSWORD_BCRYPT);

      $data = array(
              'username'		=> $input->post('username'),
              'nama_admin' => $input->post('nama_admin'),
              'password'		=> $bcrypt,
              'password_hint'	=> $input->post('password'),
            );

      $this->M_Admin->register_admin($data);

      $this->session->set_flashdata('sukses', 'Admin berhasil didaftarkan');

      redirect(base_url('Administrator'),'refresh');

    }
  }

  function logout()
  {
    // Lalu set flashdata Berhasil Login
    $this->session->set_flashdata('sukses', 'Anda berhasil log out');

    $this->session->unset_userdata('admin_data');

    redirect(base_url('Administrator'));
  }

}


 ?>
