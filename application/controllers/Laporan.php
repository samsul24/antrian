<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Laporan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_antrian');
        if ($id == '') {
            // $this->db->select('*');
            // $this->db->from('antrian');
            // $this->db->join('instansi', 'instansi.id_instansi =antrian.id_instansi');
            $this->db->where('id_instansi', 11);
            $antrian = $this->db->get('antrian')->result();
            // $antrian = $this->db->get('antrian')->result();
            // print_r();
            // exit;
        } else {
            $this->db->where('id_antrian', $id);
            $antrian = $this->db->get('antrian')->result();
        }
        $this->response($antrian, 200);
    }
 

}
?>