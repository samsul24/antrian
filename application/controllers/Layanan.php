<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Layanan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_layanan');
        if ($id == '') {
            $this->db->where('id_instansi', 11);
            $layanan = $this->db->get('layanan')->result();
        } else {
            $this->db->where('id_layanan', $id);
            $layanan = $this->db->get('layanan')->result();
        }
        $this->response($layanan, 200);
    }
    function index_put()
    {
        $id = $this->put('id_layanan');
        $data = array(
            'nama_layanan'         => $this->put('nama_layanan'),
            'nama_layanan'         => $this->put('nama_layanan'),
            'kode'                 => $this->put('kode'),
            'status'               => $this->put('status'),
            'id_instansi'          => $this->put('id_instansi'),
            'id_kategori_layanan'  => $this->put('id_kategori_layanan'),
            );
        $this->db->where('id_layanan', $id);
        $update = $this->db->update('layanan', $data);
        // print_r($update);
        // exit;
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete()
    {
        $id = $this->delete('id_layanan');
        $this->db->where('id_layanan', $id);
        $delete = $this->db->delete('layanan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>