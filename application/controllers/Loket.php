<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Loket extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_loket');
        if ($id == '') {
            // $this->db->where('id_user', 243);
            $loket = $this->db->get('loket')->result();
        } else {
            $this->db->where('id_loket', $id);
            $loket = $this->db->get('loket')->result();
        }
        $this->response($loket, 200);
    }
    function index_put()
    {
        $id = $this->put('id_loket');
        $data = array(
            'loket'         => $this->put('loket'),
            'status'         => $this->put('status'),
            );
        $this->db->where('id_loket', $id);
        $update = $this->db->update('loket', $data);
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
        $id = $this->delete('id_loket');
        $this->db->where('id_loket', $id);
        $delete = $this->db->delete('loket');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>