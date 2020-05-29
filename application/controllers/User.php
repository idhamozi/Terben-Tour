<?php
/**
 *
 */
class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_User');
    $this->load->model('M_Login');

  }

  function editProfile()
  {
    if (!$this->session->userdata('user_data')) {
        $this->session->set_flashdata('warning', 'Anda belum login !!!');
        redirect(base_url('Login'),'refresh');
    }
    $user_data = $this->session->userdata('user_data');

    $email = $user_data['email'];

    $data['user'] = $this->M_User->cek_user($email)->row();

    $this->load->view('user/setting_user', $data);
  }

  function Profile()
  {
    if (!$this->session->userdata('user_data')) {
        $this->session->set_flashdata('warning', 'Anda belum login !!!');
        redirect(base_url('Login'),'refresh');
    }

    $user_data = $this->session->userdata('user_data');

    $email = $user_data['email'];

    $data['user'] = $this->M_User->cek_user($email)->row();

    $this->load->view('user/profile_user', $data);

  }

  function upload()
  {
    $user_data = $this->session->userdata('user_data');

    $username = $user_data['username'];

    $data = array();
    $config['upload_path'] = "./assets/frontend/images/users/profile/";
    $config['allowed_types'] ='gif|jpg|jpeg|png|PNG';
    $config['file_name'] = "profile_".$username;
    $config['overwrite'] = true;

    $this->load->library('upload',$config);

    $imageupload = $this->upload->do_upload('img_profile');

    if ($imageupload) {
      $data['img_profile'] = $this->upload->data('file_name');
    }else{
      echo "<script type='text/javascript'>alert('".$this->upload->display_errors('', '').
          "');location='".base_url('User/editProfile')."';</script>";
    }
    $user_id = $user_data['user_id'];
    $result = $this->M_User->updateProfile($user_id,$data);

    if ($result) {
      if($user_data['img_profile'] != null)
        $user_data['img_profile'] = base_url("assets/frontend/images/users/profile/".$user_data['img_profile']);
      redirect(base_url('User/editProfile'),'refresh');
    }
  }

  function Change_Password()
  {
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|matches[password_hint]');
    $this->form_validation->set_rules('password_hint', 'Repeat Password', 'trim|required|min_length[3]|matches[password]');

    if ($this->form_validation->run() === FALSE) {

        $this->load->view('User/editProfile', FALSE);

    } else {

        $user_data = $this->session->userdata('user_data');

        $user_id = $user_data['user_id'];

        $bcrypt = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

        $data = array('password' => $bcrypt,
                      'password_hint' => $this->input->post('password'));

        $where = array('user_id' => $user_id );

        $this->M_User->update($where, $data, 'users');

        $this->session->set_flashdata('sukses', 'Password berhasil diperbarui !!!');

        redirect(base_url('User/editProfile'),'refresh');
    }
  }

  function Change_email()
  {
    // Validasi
    $validasi 	= $this->form_validation;

    $validasi->set_rules('email','Email','required|is_unique[users.email]');

    $this->form_validation->set_message('is_unique', '<div class="alert alert-danger" style="margin-top: 3px">
    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> sudah ada, Gunakan <b>{field}</b> yang lain !!!</div></div>');

    if ($this->form_validation->run() === FALSE) {

        $this->load->view('User/editProfile', FALSE);

    } else {

        $user_data = $this->session->userdata('user_data');

        $user_id = $user_data['user_id'];

        $username = $user_data['username'];

        $old_email = $user_data['email'];

        $data = array( 'email' => $this->input->post('email'));

        $where = array('user_id' => $user_id );

        $this->M_User->update($where, $data, 'users');

        $user = $this->M_Login->login($username)->row();

        $this->session->unset_userdata('user_data');

        $user_data = array(
          'user_id' => $user->user_id,
          'username' => $username,
          'first_name' => $user->first_name,
          'last_name' => $user->last_name,
          'email' => $user->email,
          'img_profile' => $user->img_profile,
          'date_created' => $user->date_created,

        );

        $this->session->set_userdata('user_data', $user_data);

        $this->session->set_flashdata('sukses', 'Email berhasil diperbarui !!!');

        redirect(base_url('User/editProfile'),'refresh');
    }

  }

}
 ?>
