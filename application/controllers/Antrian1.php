<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Antrian1 extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_antrian');
        if ($id == '') {
            $this->db->where('id_instansi', 11);
            $antrian1 = $this->db->get('antrian')->result();
        } else {
            $this->db->where('id_antrian', $id);
            $antrian1 = $this->db->get('antrian')->result();
        }
        $this->response($antrian1, 200);
    }
    function index_post()
    {
        $data = array(
            'tanggal'         => $this->post('tanggal'),
            'id_layanan'    => $this->post('id_layanan'),
            'nomor'           => $this->post('nomor'),
            'status'           => $this->post('status'),
        );
        $insert = $this->db->insert('antrian', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>