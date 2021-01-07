<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LayananClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/antrian/layanan";
    }

    public function index()
    {
        $data['layanan'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Layanan";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/layanan', $data);
        $this->load->view('footer1');
    }
}
?>