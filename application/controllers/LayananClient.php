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

    public function put()
    {
        $params = array('id_layanan' =>  $this->uri->segment(3));
        $data['layanan'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Layanan";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('data/put/layanan', $data);
        $this->load->view('footer');

    }
    public function put_process()
    {
        $data = array(
            'id_layanan'          => $this->input->post('id_layanan'),
            'nama_layanan'         => $this->input->post('nama_layanan'),
            'kode'                 => $this->input->post('kode'),
            'status'               => $this->input->post('status'),
            'id_instansi'          => $this->input->post('id_instansi'),
            'id_kategori_layanan'  => $this->input->post('id_kategori_layanan'),
        );
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        // print_r($update);
        // exit;
        if ($update) {
            $this->session->set_flashdata('result', 'Update Data Loket Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Update Data Loket Gagal');
        }
        redirect('layananclient');
    }
    public function delete()
    {
        $params = array('id_layanan' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Layanan Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Layanan Gagal');
        }
        redirect('layananclient');
    }

}
?>