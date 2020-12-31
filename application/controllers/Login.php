<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');
    $this->load->model('login_model');
  }

  public function index()
  {
    $data['title'] = 'login';
    $this->load->view('header1');
    $this->load->view('login/index', $data, FALSE);
    // $this->load->view('footer');
  }


  public function log_process()
  {
    $user = $this->input->post('username');
    $password = $this->input->post('password');
    $check = $this->login_model->login($username,$password);
    if(isset($data->success) && $data->success=="true"){
			if ($ceklogin != false) {
				foreach ($ceklogin as $row) {
        $this->session->set_userdata('id_user',$rows->id);
        $this->session->set_userdata('username',$rows->username);
        $this->session->set_userdata('id_user_role',$rows->id_user_role);
        }
        if ($this->session->userdata('id_user_role') == 1) {
          redirect('userclient');
        } elseif ($this->session->userdata('id_user_role') == 3) {
          redirect('login');
        }
      }
      else{
				$this->session->set_flashdata('pesan','Username dan Password Anda salah');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('result', 'Login gagal');
      redirect('userclient');
    }
  }

  public function out()
  {
    $this->session->sess_destroy();
    redirect('login', 'refresh');
  }
}

/* End of file Home.php */
