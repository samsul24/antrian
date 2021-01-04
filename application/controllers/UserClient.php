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
        $this->load->view('datauser/index', $data, FALSE);
        $this->load->view('footer1');
    }
}
?>