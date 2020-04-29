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

        // Lalu set flashdata Berhasil Login
        $this->session->set_flashdata('sukses', 'Anda berhasil login');

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

    $validasi->set_rules('first_name','First Name','required');

    $validasi->set_rules('last_name','Last Name','required');

    $validasi->set_rules('username','Username','required|is_unique[users.username]');

    $validasi->set_rules('email','Email','required|is_unique[users.email]');

    $validasi->set_rules('password','Password','required');

      //set message form validation
    $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi !!!</div></div>');
    $this->form_validation->set_message('is_unique', '<div class="alert alert-danger" style="margin-top: 3px">
    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> sudah ada, Gunakan <b>{field}</b> yang lain !!!</div></div>');

    if($validasi->run()===FALSE) {
    // End validasi

    $this->load->view('register/sign-up', FALSE);
    // Masuk ke database
    }else{

      $input = $this->input;
      $current_datetime = date('Y-m-d H:i:s');
      $bcrypt = password_hash($input->post('password'), PASSWORD_BCRYPT);

      $data = array(	'first_name'		=> $input->post('first_name'),
              'last_name'			=> $input->post('last_name'),
              'username'		=> $input->post('username'),
              'email'		=> $input->post('email'),
              'password'		=> $bcrypt,
              'password_hint'	=> $input->post('password'),
              'image_profile' => 'default.jpg',
              'date_created' => $current_datetime
            );

      // token aktivasi
      $token = base64_encode(openssl_random_pseudo_bytes(32));
      $email = $this->input->post('email', true);

      $users_token = [
          'email' => $email,
          'token' => $token,
          'date_created' => time()
      ];

      $this->M_Login->register($data);

      $this->M_Login->token($users_token);

      $this->_sendEmail($token, 'verify');

      $this->session->set_flashdata('sukses', 'Akun telah terdaftar, cek email untuk aktivasi');

      redirect(base_url('Login'),'refresh');
    }
  }

    function _sendEmail($token, $type)
  {
      $config = [
          'protocol'  => 'smtp',
          'smtp_host' => 'ssl://terben-tour.pmh.web.id',
          'smtp_user' => 'admin@terben-tour.pmh.web.id',
          'smtp_pass' => 'Terbentour12345!',
          'smtp_port' => 465,
          'mailtype'  => 'html',
          'charset'   => 'utf-8',
          'newline'   => "\r\n"
      ];

      $this->email->initialize($config);

      $this->email->from('admin@terben-tour.pmh.web.id', 'ADMIN Terben Tour');

      $this->email->to($this->input->post('email'));

      if ($type == 'verify') {

          $this->email->subject('Account Verification');
          $this->email->message('Click this link to verify you account : <a href="' . base_url() . 'login/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');

      } else if ($type == 'forgot') {

          $this->email->subject('Reset Password');
          $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'login/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
      }

      if ($this->email->send()) {
          return true;
      } else {
          echo $this->email->print_debugger();
          die;
      }
  }

  function verify()
  {
      $email = $this->input->get('email');
      $token = $this->input->get('token');

      $user = $this->M_Login->user_target($email)->row_array();

      if ($user) {

          $user_token = $this->M_Login->user_token($token)->row_array();

          if ($user_token) {
              if (time() - $user_token['date_created'] < (60 * 60 * 24)) {

                  $this->M_Login->verify($email);

                  $this->session->set_flashdata('sukses', 'Akun dengan ' . $email . ' telah aktif !!!');
                  redirect('Login');
              } else {

                  $this->M_Login->verify_expired($email);

                  $this->session->set_flashdata('warning', 'Akun Gagal aktif, token expired !!!');

                  redirect('Login');
              }
          } else {

              $this->session->set_flashdata('warning', 'Akun Gagal aktif, token salah !!!');

              redirect('Login');
          }
      } else {

          $this->session->set_flashdata('warning', 'Akun Gagal aktif, Email salah !!!');

          redirect('Login');
      }
  }

  public function forgotPassword()
{
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    //set message form validation
    $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi !!!</div></div>');

    if ($this->form_validation->run() === FALSE) {

        $this->load->view('login/sign-in', FALSE);

    } else {
        $email = $this->input->post('email');
        $user = $this->M_Login->user_target($email)->row_array();

        if ($user) {
            // token aktivasi
            $token = base64_encode(openssl_random_pseudo_bytes(32));
            $users_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->M_Login->token($users_token);

            $this->_sendEmail($token, 'forgot');

            $this->session->set_flashdata('sukses', 'Silahkan cek email anda !!!');
            redirect('login');
        } else {

            $this->session->set_flashdata('warning', 'Email tidak terdaftar !!!');
            redirect('login');
        }
    }
  }

  public function resetPassword()
  {
      $email = $this->input->get('email');
      $token = $this->input->get('token');

      $user = $this->M_Login->user_target($email)->row_array();

      if ($user) {
          $user_token = $this->M_Login->user_token($token)->row_array();

          if ($user_token) {
              $this->session->set_userdata('reset_email', $email);

              $this->changePassword();
          } else {

              $this->session->set_flashdata('warning', 'Akun Gagal aktif, Token salah !!!');

              redirect('login');
          }
      } else {

          $this->session->set_flashdata('warning', 'Akun Gagal aktif, Email salah !!!');

          redirect('login');
      }
  }


  public function changePassword()
  {
      if (!$this->session->userdata('reset_email')) {
          redirect('login');
      }

      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|matches[password_hint]');
      $this->form_validation->set_rules('password_hint', 'Repeat Password', 'trim|required|min_length[3]|matches[password]');

      if ($this->form_validation->run() === FALSE) {

          $this->load->view('login/change-password', FALSE);

      } else {

          $bcrypt = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

          $email = $this->session->userdata('reset_email');
          $password_hint = $this->input->post('password_hint');

          $data = array('password' => $bcrpyt,
                        'password_hint' => $password_hint);

          $where = array('email' => $email );

          $this->M_Login->change_password($where, $data, 'users');

          $this->session->unset_userdata('reset_email');

          $this->session->set_flashdata('sukses', 'Password berhasil diperbarui !!!');

          redirect('login');
      }
  }

  function LoginCommon()
  {
    // Validasi input
    $this->form_validation->set_rules('username','Username','required');

    $this->form_validation->set_rules('password','Password','required');

      //set message form validation
    $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

    if($this->form_validation->run() === TRUE) {
      $username 	= htmlspecialchars($this->input->post('username'),ENT_QUOTES);
      $password 	= htmlspecialchars($this->input->post('password'),ENT_QUOTES);

      $ambildata = $this->M_Login->login($username)->num_rows();
      $user = $this->M_Login->login($username)->row();

      if ($ambildata == 0 || $ambildata > 1 ) {
        // Kalau ga ada user yg cocok, suruh login lagi
        $this->session->set_flashdata('warning', 'Username/Password salah');
        redirect(base_url('login'),'refresh');

      } else {
        if (password_verify($password, $user->password)) {

        $user_active = $this->M_Login->login($username)->row_array();

            if ($user_active['is_active'] == 1) {
              $user_data = array(
                'user_id' => $user->user_id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'username' => $username,
                'email' => $user->email
              );

              // Create session utk login
              $this->session->set_userdata('user_data', $user_data);

              // Lalu set flashdata Berhasil Login
              $this->session->set_flashdata('sukses', 'Anda berhasil login');

              // Jika ga ada, default masuk ke halaman dasbor
              redirect(base_url(''),'refresh');
            } else {
              // Lalu set flashdata Berhasil Login
              $this->session->set_flashdata('warning', 'Akun anda belum aktif, lakukan verifikasi terlebih dahulu !!!');

              // Jika ga ada, default masuk ke halaman dasbor
              redirect(base_url('login'),'refresh');
            }

        } else {
          // Kalau ga ada user yg cocok, suruh login lagi
          $this->session->set_flashdata('warning', 'Username/Password salah');
          redirect(base_url('login'),'refresh');
        }
      }
    }
    // End validasi

    $this->load->view('login/sign-in', FALSE);
  }

  function logout()
  {
    // Lalu set flashdata Berhasil Login
    $this->session->set_flashdata('sukses', 'Anda berhasil log out');

    $this->session->unset_userdata('access_token');

    $this->session->unset_userdata('user_data');

    redirect(base_url(''));
  }
}

 ?>
