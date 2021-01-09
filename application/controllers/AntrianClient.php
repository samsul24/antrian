<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AntrianClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/antrian/antrian";
        $this->API2 = "http://localhost:8080/antrian/antrian1";

    }

    public function index()
    {
        $data['antrian'] = json_decode($this->curl->simple_get($this->API));
        $data['antrian1'] = json_decode($this->curl->simple_get($this->API2));
        $data['title'] = "Antrian";
        // $this->load->view('header0');
        // $this->load->view('bar');
        $this->load->view('user/antrian', $data);
        // $this->load->view('footer1');
    }
}
?>