<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{
public function get_user()
    {
        $this->db->select('id_user,username,password');
        $this->db->from('user');
        $query = $this->db->get();
        if ($query->num_rows() >= 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    function jum_user()
    {
            $data = $this->db->query("SELECT * from user");
            return $data->result();
        }
}
?>