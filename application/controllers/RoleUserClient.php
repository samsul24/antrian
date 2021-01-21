<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RoleUserClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/antrian/roleuser";
    }

    public function index()
    {
        $data['roleuser'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Role User";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/role', $data, FALSE);
        $this->load->view('footer');
    }
}
?>