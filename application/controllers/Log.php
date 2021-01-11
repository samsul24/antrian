<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Log extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_log');
        if ($id == '') {
            $this->db->where('id_user', 243);
            $log = $this->db->get('log')->result();
        } else {
            $this->db->where('id_log', $id);
            $log = $this->db->get('log')->result();
        }
        $this->response($log, 200);
    }

}
?>