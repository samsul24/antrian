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
        if ($id == '') {
            $this->db->where('id_instansi', 11);
            $antrian = $this->db->get('layanan')->result();
        } else {
            $this->db->where('id_layanan', $id);
            $antrian = $this->db->get('antrian')->result();
        }
        $this->response($antrian, 200);
    }

}
?>