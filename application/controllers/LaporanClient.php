<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        // $this->load->library('pdf');
        
        $this->API = "http://localhost:8080/antrian/laporan";
    }

    public function index()
    {
        $data['laporan'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Laporan";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/laporan', $data, FALSE);
        $this->load->view('footer');
    }
}
?>