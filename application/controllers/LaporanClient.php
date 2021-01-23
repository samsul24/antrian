<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LaporanClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('admin_model');
        
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
    public function date()
    {
        $startdate=$this->input->get('tanggal_awal', TRUE);
        $enddate=$this->input->get('tanggal_akhir', TRUE);
        // $data['laporan'] = json_decode($this->curl->simple_get($this->API.'search/startdate='.$startdate.'&enddate='.$enddate);
        // var_dump($data);
        $data['laporan']=$this->admin_model->search($startdate,$enddate);
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/laporan', $data, FALSE);
        $this->load->view('footer');
        // print_r($startdate."=====".$enddate);
        // exit;
    }
    
}
?>