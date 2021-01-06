<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {


	function __construct(){
		parent::__construct();
		// $this->load->library('fpdf');
	}

	public function index()
	{
		$nowDate = date('Y-m-d');

		$this->db->limit('1');
		$this->db->where('tanggal',$nowDate);
		$this->db->order_by('nomor','DESC');
		$antrian = $this->db->get('antrian')->row();
		if($antrian){
			$data['nomor'] = $antrian->nomor;

		}else{
			$data['nomor'] = 0;
		}
		$this->load->view ('user/antrian',$data);
	}

	public function getNoAntrian(){
		$noAntrian=1;
		$nowDate = date('Y-m-d');

		$this->db->limit('1');
		$this->db->where('tanggal',$nowDate);
		$this->db->order_by('nomor','DESC');
		$antrian = $this->db->get('antrian')->row();

		if($antrian){
			$no= $antrian->nomor;

		}else{
			$no = 0;
		}

		$no = $no + 1;
		$this->db->set('nomor',$no);
		$this->db->set('tanggal', $nowDate);
		$getRow = $this->db->insert('antrian');

		$hasil = array("no"=> $no);
        echo json_encode($hasil);
	}

	public function cetak($no){
    	$data['row'] =   array('no'=>$no, 'tgl'=>date('Y-m-d'));
    	$this->load->view('user/cetak_antrian_1',$data);

	}
}