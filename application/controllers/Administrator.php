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
    $this->load->model('M_Admin');
    $this->load->model('M_User');
    $this->load->model('M_Kategori');
    $this->load->model('M_Paket');
    $this->load->model('M_Testimoni');
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
    if (!$this->session->userdata('admin_data')) {
        $this->session->set_flashdata('warning', 'Anda belum login !!!');
        redirect(base_url('Administrator'),'refresh');
    }
    $data['admin'] = $this->M_Admin->getAllAdmin();
    $data['admin_on'] = $this->M_Admin->getAdminOn();
    $data['paket'] = $this->M_Paket->getAllPaket();
    $data['users'] = $this->M_User->getAllUser();
    $data['users_google'] = $this->M_User->getAllUserGoogle();

    $this->load->view('admin/dashboard', $data);
  }

  function MostTrips()
  {
    if (!$this->session->userdata('admin_data')) {
        $this->session->set_flashdata('warning', 'Anda belum login !!!');
        redirect(base_url('Administrator'),'refresh');
    }
    $data['kategori'] = $this->M_Kategori->getKategori();
    $data['paket'] = $this->M_Paket->getAllPaket();
    $this->load->view('admin/homepage/mosttrip', $data);
  }

  function Testimonial()
  {
    if (!$this->session->userdata('admin_data')) {
        $this->session->set_flashdata('warning', 'Anda belum login !!!');
        redirect(base_url('Administrator'),'refresh');
    }
    $data['testimoni'] = $this->M_Testimoni->getAllTestimoni();
    $data['users'] = $this->M_User->getAllUser();
    $data['users_google'] = $this->M_User->getAllUserGoogle();
    $data['paket'] = $this->M_Paket->getAllPaket();
    $this->load->view('admin/homepage/testimonial', $data);
  }

  function Del_Testi($testimoni_id)
  {
    $this->M_Testimoni->DeleteTesti($testimoni_id);
    $this->session->set_flashdata('sukses', 'Anda berhasil menghapus Testimoni !!!');
    redirect(base_url('Administrator/Testimonial'),'refresh');
  }

  function Paket($kategori_id)
  {
    $data['paket'] = $this->M_Paket->getPaketKategori($kategori_id);
    $this->load->view('admin/travel/paket',$data);
  }

  function Add_Paket()
  {
    if($this->input->post('submit') != null){
    $user_data = $this->session->userdata('admin_data');
    $username = $user_data['username'];

    $data = array();
    $paketUUID = uniqid();
    $config['upload_path'] = "./assets/frontend/images/admin/paket/";
    $config['allowed_types'] ='gif|jpg|jpeg|png|PNG';
    $config['max_size']      = 0; // KB
    $config['file_name'] = $username."_".$paketUUID;
    $config['overwrite'] = true;

    $this->load->library('upload',$config);

    $title = $this->input->post('Judul');
    $deskripsi = $this->input->post('Deskripsi');
    $kategori = $this->input->post('Kategori');
    $durasi = $this->input->post('Durasi');
    $max_person = $this->input->post('Max');
    $harga = $this->input->post('Harga');
    $bed = $this->input->post('Bedroom');
    $bath = $this->input->post('Bathroom');
    $tv = $this->input->post('Tv');
    $inet = $this->input->post('Inet');



    $imageupload = $this->upload->do_upload('image');
    $image = ($imageupload)? $this->upload->data('file_name'):NULL;

    $result = $this->M_Paket->insertPaket($paketUUID, $kategori , $image, $title, $deskripsi, $max_person, $durasi,  $harga, $bed, $bath, $tv, $inet);

    $this->session->set_flashdata('sukses', 'Data berhasil ditambah !!!');

    redirect(base_url('Administrator/MostTrips'),'refresh');

      }
    }

    function editPaket($paket_id)
    {
      $data = $this->getPaketData($paket_id);
      $this->load->view('admin/homepage/editPaket',$data);
    }

    function getPaketData($paket_id)
    {
      $data['paket'] = $this->M_Paket->getPaket($paket_id);
      $data['kategori'] = $this->M_Kategori->getKategori();
      $kategoris = $data['paket'][0]->kategori_id;
      $kategori = $this->M_Kategori->getKategoriName($kategoris);
      foreach ($kategori as $key => $value)
      {
        $data['kategori_paket'][$kategoris[$key]-1] = $value;
      }
      return $data;
    }

    // Edit process for story
    function editProses($paket_id){
      if($this->input->post('submit') != null){
        $user_data = $this->session->userdata('admin_data');
        $username = $user_data['username'];
        $data = array();
        $config['upload_path'] = "./assets/frontend/images/admin/paket/";
        $config['allowed_types'] ='gif|jpg|jpeg|png|PNG';
        $config['max_size']      = 0; // KB
        $config['file_name'] = $username."_".$paket_id;
        $config['overwrite'] = true;

        $this->load->library('upload',$config);

        $title = $this->input->post('Judul');
        $deskripsi = $this->input->post('Deskripsi');
        $kategori = $this->input->post('Kategori');
        $durasi = $this->input->post('Durasi');
        $max_person = $this->input->post('Max');
        $harga = $this->input->post('Harga');
        $bed = $this->input->post('Bedroom');
        $bath = $this->input->post('Bathroom');
        $tv = $this->input->post('Tv');
        $inet = $this->input->post('Inet');


        $imageupload = $this->upload->do_upload('image');
        $image = ($imageupload)? $this->upload->data('file_name'):NULL;

        $result = $this->M_Paket->updatePaket($paket_id, $kategori , $image, $title, $deskripsi, $max_person, $durasi,  $harga, $bed, $bath, $tv, $inet);

        $this->session->set_flashdata('sukses', 'Data berhasil diubah !!!');

        redirect(base_url('Administrator/MostTrips'),'refresh');

      }
    }

    function Validate()
    {
      $data['paket'] = $this->M_Paket->getAllPay();
      $data['nama_paket'] = $this->M_Paket->getAllPaket();
      $this->load->view('admin/homepage/validate', $data);
    }

    function Reject($checkout_id)
    {
      $this->M_Paket->Reject($checkout_id);

      $data = $this->M_Paket->checkoutData($checkout_id);

      $email = $data[0]->email;

      $this->_sendEmail($checkout_id, $email, 'reject');

      $this->session->set_flashdata('sukses', 'Pembayaran gagal di validasi !!!');

      redirect(base_url('Administrator/Dashboard'),'refresh');
    }

    function isValid($checkout_id)
    {
      $this->M_Paket->isValid($checkout_id);

      $data = $this->M_Paket->checkoutData($checkout_id);

      $email = $data[0]->email;

      $this->_sendEmail($checkout_id, $email, 'valid');

      $this->session->set_flashdata('sukses', 'Pembayaran sudah di validasi !!!');

      redirect(base_url('Administrator/Dashboard'),'refresh');
    }

    function _sendEmail($checkout_id, $email, $type)
  {
      $config = [
          'protocol'  => 'smtp',
          'smtp_host' => 'ssl://smtp.googlemail.com',
          'smtp_user' => 'info.terbentour@gmail.com',
          'smtp_pass' => '******',
          'smtp_port' => 465,
          'mailtype'  => 'html',
          'charset'   => 'utf-8',
          'newline'   => "\r\n"
      ];

      $this->email->initialize($config);

      $this->email->from('info.terbentour@gmail.com', 'Terben Tour & Travel');

      $this->email->to($email);

      if ($type == 'valid') {

        $this->email->subject('Tour E-Ticket');
        $this->email->message("Hai, ".$email." \r\n Congratulation !!! Your payment has succesfull validate and enjoy your trip with us ! \r\n".'Click this link to input testimoni : <a href="' . base_url() . 'Testimoni/inputTesti?checkout_id=' . $checkout_id .'">Testimoni Package</a>');
        $this->email->attach(base_url('assets/frontend/images/Eticket.png'));

      } elseif ($type == 'reject') {

        $this->email->subject('Your Validate is Rejected');
        $this->email->message('Hai, '.$email."\r\n".'  We re Sorry !!! Your payment has failed validate, please contact our team in this email to confirm your payment !');

      }

      if ($this->email->send()) {
          return true;
      } else {
          echo $this->email->print_debugger();
          die;
      }
  }

    function Delete_Paket($paket_id)
    {
      $this->M_Paket->delete_paket($paket_id);

      $this->session->set_flashdata('sukses', 'Data berhasil dihapus !!!');

      redirect(base_url('Administrator/MostTrips'),'refresh');
    }

  function Add_admin()
  {
    if (!$this->session->userdata('admin_data')) {
        $this->session->set_flashdata('warning', 'Anda belum login !!!');
        redirect(base_url('Administrator'),'refresh');
    }
    // Validasi
    $validasi = $this->form_validation;
    $validasi->set_rules('username','Username','required|is_unique[admin.username]');
    $validasi->set_rules('email','Email','required|is_unique[admin.email]');
    $validasi->set_rules('nama_admin','Nama admin','required');
    $validasi->set_rules('password','Password', 'trim|required|min_length[3]|matches[password_hint]');
    $validasi->set_rules('password_hint','Password Hint', 'trim|required|min_length[3]|matches[password]');

    //set message form validation
  $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
  <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi !!!</div></div>');

  $this->form_validation->set_message('matches', '<div class="alert alert-danger" style="margin-top: 3px">
  <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field} tidak sama !!!</b></div></div>');

  $this->form_validation->set_message('min_length', '<div class="alert alert-danger" style="margin-top: 3px">
  <div class="header"><b><i class="fa fa-exclamation-circle"></i> Password terlalu pendek !!!</b></div></div>');

  $this->form_validation->set_message('is_unique', '<div class="alert alert-danger" style="margin-top: 3px">
  <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> sudah ada !!!</div></div>');

  if($validasi->run()===FALSE) {
  // End validasi

  $this->load->view('admin/setting/add_admin', FALSE);
  // Masuk ke database
  }else{

      $input = $this->input;
      $bcrypt = password_hash($input->post('password'), PASSWORD_BCRYPT);

      $data = array(
              'username'		=> $input->post('username'),
              'email'		=> $input->post('email'),
              'nama_admin' => $input->post('nama_admin'),
              'password'		=> $bcrypt,
              'password_hint'	=> $input->post('password_hint'),
            );

      $this->M_Admin->register_admin($data);

      $this->session->set_flashdata('sukses', 'Admin berhasil didaftarkan');

      redirect(base_url('Administrator/Dashboard'),'refresh');

    }
  }

  function List_admin()
  {
    if (!$this->session->userdata('admin_data')) {
        $this->session->set_flashdata('warning', 'Anda belum login !!!');
        redirect(base_url('Administrator'),'refresh');
    }

    $data['All_admin'] = $this->M_Admin->getAllAdmin();

    $this->load->view('admin/setting/list_admin', $data);

  }

  function hapus_admin($admin_id)
  {
    $this->M_Admin->delete_admin($admin_id);

    $this->session->set_flashdata('sukses', 'Data berhasil dihapus !!!');

    redirect(base_url('Administrator/List_admin'),'refresh');

  }

  function logout($username)
  {

    $admin = $this->M_Login->login_admin($username)->row();

    $this->M_Login->logout_admin($username);

    // Lalu set flashdata Berhasil Login
    $this->session->set_flashdata('sukses', 'Anda berhasil log out');

    $admin_data = array(
      'admin_id' => $admin->admin_id,
      'nama_admin' => $admin->nama_admin,
      'username' => $username
    );

    $this->session->unset_userdata('admin_data', $admin_data);

    redirect(base_url('Administrator'),'refresh');
  }

}


 ?>
