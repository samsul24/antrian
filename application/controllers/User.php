<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class User extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_user');
        if ($id == '') {
            $this->db->where('id_instansi', 11);
            $user = $this->db->get('user')->result();
        } else {
            $this->db->where('id_user', $id);
            $user = $this->db->get('user')->result();
        }
        $this->response($user, 200);
    }

}
?>