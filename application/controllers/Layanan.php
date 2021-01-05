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
            $layanan = $this->db->get('layanan')->result();
        } else {
            $this->db->where('id_layanan', $id);
            $layanan = $this->db->get('layanan')->result();
        }
        $this->response($layanan, 200);
    }

}
?>