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
    function index_put()
    {
        $id = $this->put('id_user');
        $data = array(
            'username'         => $this->put('username'),
            'password'         => $this->put('password'),
            'nama'             => $this->put('nama'),
            'no_telp'          => $this->put('no_telp'),
            'id_user_role'     => $this->put('id_user_role'),
            'email'            => $this->put('email'),
            'foto'             => $this->put('foto'),
            'id_instansi'      => $this->put('id_instansi'),
            );
        $this->db->where('id_user', $id);
        $update = $this->db->update('user', $data);
        print_r($update);
        exit;
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    function index_delete()
    {
        $id = $this->delete('id_user');
        $this->db->where('id_user', $id);
        $delete = $this->db->delete('user');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>