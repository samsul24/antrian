<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class RoleUser extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_get()
    {
        $id = $this->get('id_user_role');
        if ($id == '') {
            $user = $this->db->get('user_role')->result();
        } else {
            $this->db->where('id_user_role', $id);
            $user = $this->db->get('user_role')->result();
        }
        $this->response($user, 200);
    }

}
?>