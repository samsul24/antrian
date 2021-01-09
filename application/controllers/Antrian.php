<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Antrian extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_layanan');
        $id2 = $this->get('id_antrian');
        if ($id == '') {
            $this->db->where('id_instansi', 11);
            $antrian = $this->db->get('layanan')->result();
        } else {
            $this->db->where('id_layanan', $id);
            $antrian = $this->db->get('layanan')->result();
        }
        if ($id2 != '') {
            $this->db->where('id_instansi', 11);
            $layanan = $this->db->get('antrian')->result();
        }
        $this->response($antrian, 200);
    }
    public function saveAntrian(){
    	$id_layanan = $this->input->post('id_layanan');
    	$kode = substr($this->input->post('kode'),4);
    	$tanggal = date("Y-m-d");

        // echo $tanggal; exit();

    	$this->db->set('id_layanan',$id_layanan);
    	$this->db->set('nomor',$nomor);
    	$this->db->set('tanggal',$tanggal);
    	$this->db->insert('antrian');

    	$no_antrian = $this->input->post('nomor');
    	$this->db->set('nomor',$no_antrian+1);
    	$this->db->set('tanggal',$tanggal);
    	$this->db->insert('antrian');

    	redirect(base_url());

    }

}
?>