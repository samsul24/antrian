<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/antrian/user";
    }

    public function index()
    {
        $data['user'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "user";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/user', $data, FALSE);
        $this->load->view('footer');
    }
    
    public function put()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $data['user'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Loket";
        $this->load->view('header0');
        $this->load->view('footer');
        $this->load->view('bar');
        $this->load->view('data/put/user', $data);

    }
    public function put_process()
    {
        $data = array(
            'id_user'          => $this->input->post('id_user'),
            'username'         => $this->input->post('username'),
            'password'         => $this->input->post('password'),
            'nama'             => $this->input->post('nama'),
            'no_telp'          => $this->input->post('no_telp'),
            'id_user_role'     => $this->input->post('id_user_role'),
            'email'            => $this->input->post('email'),
            'foto'             => $this->input->post('foto'),
            'id_instansi'      => $this->input->post('id_instansi'),
        );
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data Loket Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data Loket Gagal');
        }
        redirect('userclient');
    }
    public function delete()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data User Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data User Gagal');
        }
        redirect('userclient');
    }
    
}
?>