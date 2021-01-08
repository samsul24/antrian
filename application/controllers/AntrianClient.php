<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AntrianClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/antrian/layanan";

    }

    public function index()
    {
        $data['antrian'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Antrian";
        // $this->load->view('header0');
        // $this->load->view('bar');
        $this->load->view('user/antrian', $data);
        // $this->load->view('footer1');
    }
}
?>