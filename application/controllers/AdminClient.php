<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->load->model('admin_model');       

    }

    public function index()
    {
        foreach($this->admin_model->grafik()->result_array() as $row)
        {
        $data['antrian'][]=(float)$row['Januari'];
        $data['antrian'][]=(float)$row['Februari'];
        $data['antrian'][]=(float)$row['Maret'];
        $data['antrian'][]=(float)$row['April'];
        $data['antrian'][]=(float)$row['Mei'];
        $data['antrian'][]=(float)$row['Juni'];
        $data['antrian'][]=(float)$row['Juli'];
        $data['antrian'][]=(float)$row['Agustus'];
        $data['antrian'][]=(float)$row['September'];
        $data['antrian'][]=(float)$row['Oktober'];
        $data['antrian'][]=(float)$row['November'];
        $data['antrian'][]=(float)$row['Desember'];
        }
        $data['title'] = "Dashboard";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('admin/index', $data, FALSE);
        $this->load->view('footer1');
    }

    public function index1()
    {
    foreach($this->admin_model->grafik_tunggu()->result_array() as $row)
    {
    $data1['antrian'][]=(float)$row['Senin'];
    $data1['antrian'][]=(float)$row['Selasa'];
    $data1['antrian'][]=(float)$row['Rabu'];
    $data1['antrian'][]=(float)$row['Kamis'];
    $data1['antrian'][]=(float)$row['Jumat'];
    $data1['antrian'][]=(float)$row['Sabtu'];
    $data1['antrian'][]=(float)$row['Minggu'];
    }
    $data1['title'] = "Dashboard";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('admin/index', $data1, FALSE);
        $this->load->view('footer1');
    }
}
?>