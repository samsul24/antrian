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
        $data['title'] = "Dashboard";
        $this->load->view('header0');
        $this->load->view('bar');
        $this->load->view('admin/index', $data, FALSE);
        $this->load->view('footer1');
    }
    public function user()
    {
        $data['user'] = $this->admin_model->get1();
        $data['title'] = 'Katalog';
        $this->load->view('header4', $data);
        $this->load->view('materi/subindexhabitat', $data, FALSE);
        $this->load->view('footer', $data);

    }
    public function index()
	{
		$data['user'] = $this->admin_model->jum_user();
		$this->load->view('chart', $data);
	}
    
}
?>