<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LogClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/antrian/log";
    }

    public function index()
    {
        $data['log'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Log";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/log', $data, FALSE);
        $this->load->view('footer');
    }
}
?>