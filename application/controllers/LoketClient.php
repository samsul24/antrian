<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoketClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        
        $this->API = "http://localhost:8080/antrian/loket";
    }

    public function index()
    {
        $data['loket'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Loket";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/loket', $data, FALSE);
        $this->load->view('footer1');
    }
    public function put()
    {
        $params = array('id_loket' =>  $this->uri->segment(3));
        $data['loket'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Loket";
        $this->load->view('header0');
        $this->load->view('footer');
        $this->load->view('bar');
        $this->load->view('data/put/loket', $data);

    }
    public function put_process()
    {
        $data = array(
            'id_loket'          => $this->input->post('id_loket'),
            'loket'             => $this->input->post('loket'),
            'status'            => $this->input->post('status'),
        );
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data Loket Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data Loket Gagal');
        }
        redirect('loketclient');
    }
    public function delete()
    {
        $params = array('id_loket' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Loket Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Loket Gagal');
        }
        redirect('loketclient');
    }
    

}
?>