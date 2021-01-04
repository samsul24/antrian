<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('curl');
    $this->load->library('session');
    $this->load->model('login_model');
  }

  public function index()
  {
    $data['title'] = 'login';
    $this->load->view('header1');
    $this->load->view('login/index', $data);
    // $this->load->view('footer');
  }


  public function log_process()
  {
    $user = htmlspecialchars($this->input->post('user', true));
    $password = htmlspecialchars($this->input->post('password', true));
    $check = $this->login_model->login($user, $password);
    
    if ($check) {
        $this->session->set_userdata('id_user', $check->id_user);
        $this->session->set_userdata('username', $check->username);
        $this->session->set_userdata('id_user_role', $check->id_user_role);
        $this->session->set_userdata('id_instansi', $check->id_instansi); 
      
        if ($this->session->userdata('id_user_role') == 1) {
          // print "samsul";
          // exit;
          redirect('adminclient');
        }else if ($this->session->userdata('id_user_role') == 3) {
          print "kowe";
          exit;
      }  
    }
    else {
      $this->session->set_flashdata('result', 'Login gagal');
      redirect('login');

    }
  }
    

  public function out()
  {
    $this->session->sess_destroy();
    redirect('login', 'refresh');
  }
}

/* End of file Home.php */
?>