<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('id_user_role', 11);
        $this->db->limit(1);    
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function input_data($data)
    {
        $this->db->insert('login', $data);
        // $this->session->set_flashdata('status', 'Registration success, please wait for verification');
    }
}

/* End of file ModelName.php */
