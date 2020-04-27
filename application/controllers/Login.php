<?php
defined('BASEPATH') OR exit ('No direct script allowed');

/**
 *
 */
class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_GoogleLogin');
    $this->load->model('M_Login');
  }

  function index()
  {
    include_once APPPATH . "libraries/vendor/autoload.php";

    $google_client = new Google_Client();
    $google_client->setClientId('756730119702-4laolkdb29t1j15a61jdu3sdepv9654h.apps.googleusercontent.com');
    $google_client->setClientSecret('jKDIjSQXC1nceDhqDRwhg78s');
    $google_client->setRedirectUri(base_url('Login'));
    $google_client->addScope('email');
    $google_client->addScope('profile');

    if (isset($_GET["code"]))
    {
      $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

      if (!isset($token["error"]))
      {
        $google_client->setAccessToken($token['access_token']);
        $this->session->userdata('access_token', $token['access_token']);
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();
        $current_datetime = date('Y-m-d H:i:s');

        if ($this->M_GoogleLogin->Is_already_register($data['id']))
        {
          // update data
          $user_data = array(
            'first_name' => $data['given_name'],
            'last_name'  => $data['family_name'],
            'email'      => $data['email'],
            'img_profile'=> $data['picture'],
            'updated_at'  => $current_datetime);

            $this->M_GoogleLogin->Update_user_data($user_data, $data['id']);
        }
        else {
          // insert data
          $user_data = array(
            'login_oauth_uid' => $data['id'],
            'first_name'      => $data['given_name'],
            'last_name'       => $data['family_name'],
            'email'           => $data['email'],
            'img_profile'     => $data['picture'],
            'created_at'       => $current_datetime);

            $this->M_GoogleLogin->Insert_user_data($user_data);
        }

        $this->session->set_userdata('user_data', $user_data);

        redirect(base_url(''));

      }
    }

    if (!$this->session->userdata('access_token'))
    {
      $login_button = $google_client->createAuthUrl();
    }
    $data['login_button'] = $login_button;

    $this->load->view('login/sign-in', $data);
  }

  function Register()
  {

  // Validasi
  $validasi 	= $this->form_validation;

  $validasi->set_rules('first_name','First Name','required',
    array(	'required'		=> '%s harus diisi'));

  $validasi->set_rules('last_name','Last Name','required',
    array(	'required'		=> '%s harus diisi'));

  $validasi->set_rules('username','Username','required|is_unique[users.username]',
    array(	'required'		=> '%s harus diisi',
        'is_unique'		=> '%s sudah ada. Buat username yang lain'));

  $validasi->set_rules('email','Email','required|is_unique[users.email]',
    array(	'required'		=> '%s harus diisi',
        'is_unique'		=> '%s sudah ada. Gunakan email yang lain'));

  $validasi->set_rules('password','Password','required',
    array(	'required'		=> '%s harus diisi'));

  if($validasi->run()===FALSE) {
  // End validasi

  $this->load->view('register/sign-up', FALSE);
  // Masuk ke database
  }else{

    $input = $this->input;
    $bcrypt = password_hash($input->post('password'), PASSWORD_BCRYPT);

    $data = array(	'first_name'		=> $input->post('first_name'),
            'last_name'			=> $input->post('last_name'),
            'username'		=> $input->post('username'),
            'email'		=> $input->post('email'),
            'password'		=> $bcrypt,
            'password_hint'	=> $input->post('password')
          );

    $this->M_Login->register($data);
    $this->session->set_flashdata('sukses', 'Anda Berhasil Mendaftar');
    redirect(base_url(''),'refresh');
  }

  }

  function LoginCommon()
  {
    // Validasi input
    $this->form_validation->set_rules('username','Username','required',
      array(	'required'	=> '%s harus diisi'));

    $this->form_validation->set_rules('password','Password','required',
      array(	'required'	=> '%s harus diisi'));

    if($this->form_validation->run() === TRUE) {
      $username 	= htmlspecialchars($this->input->post('username'),ENT_QUOTES);
      $password 	= htmlspecialchars($this->input->post('password'),ENT_QUOTES);

      $ambildata = $this->M_Login->login($username)->num_rows();
      $user = $this->M_Login->login($username)->row();

      if ($ambildata == 0 || $ambildata > 1 ) {
        // Kalau ga ada user yg cocok, suruh login lagi
        $this->session->set_flashdata('warning', 'Data Tidak Ada');
        redirect(base_url('Login'),'refresh');

      } else {
        if (password_verify($password, $user->password)) {
          $user_data = array(
            'user_id' => $user->user_id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'username' => $username,
            'email' => $user->email);

          // Create session utk login
          $this->session->set_userdata('user_data', $user_data);

          // Lalu redirect masuk ke halaman dashboard
          $this->session->set_flashdata('sukses', 'Anda berhasil login');

            // Jika ga ada, default masuk ke halaman dasbor
            redirect(base_url(''),'refresh');
        } else {
          // Kalau ga ada user yg cocok, suruh login lagi
          $this->session->set_flashdata('warning', 'Username/password salah');
          redirect(base_url('Login'),'refresh');
        }
      }
    }
    // End validasi

    $this->load->view('login/sign-in', FALSE);
  }

  function logout()
  {
    $this->session->unset_userdata('access_token');

    $this->session->unset_userdata('user_data');

    redirect(base_url(''));
  }
}

 ?>
