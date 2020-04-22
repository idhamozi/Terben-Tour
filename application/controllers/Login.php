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

  function Commonlogin()
  {


  }

  function logout()
  {
    $this->session->unset_userdata('access_token');

    $this->session->unset_userdata('user_data');

    redirect(base_url(''));
  }
}

 ?>
