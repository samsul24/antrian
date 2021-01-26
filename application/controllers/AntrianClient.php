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
        $this->load->view('user/antrian', $data);
    }
    public function post_process()
    {
        $data = array(
            'nomor'           => $this->input->post('nomor'),
            'tanggal'         => $this->input->post('tanggal'),
            'id_layanan'    => $this->input->post('id_layanan'),
            'status'    => 1
        );
        $insert =  $this->curl->simple_post($this->API2, $data);
        print_r($insert);
        exit;
        // if ($insert) {
        //     print'data berhasil';
        //     $this->session->set_flashdata('result', 'Data Antrian Berhasil Ditambahkan');
        // } else {
        //     print'data gagal';
        //     $this->session->set_flashdata('result', 'Data Antrian Gagal Ditambahkan');
        // }
        redirect('Antrianclient');
    }
}
?>