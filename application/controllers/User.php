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

        $email = $user_data['email'];

        $bcrypt = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

        $data = array('password' => $bcrypt,
                      'password_hint' => $this->input->post('password'));

        $where = array('email' => $email );

        $this->M_User->change_password($where, $data, 'users');

        $this->session->set_flashdata('sukses', 'Password berhasil diperbarui !!!');

        redirect(base_url('User/editProfile'),'refresh');
    }
  }

}
 ?>
