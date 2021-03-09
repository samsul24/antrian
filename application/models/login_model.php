<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function login ($user,$password)
    {
        $this->db->where('username', $user);
        $this->db->where('password', md5($password));
		$this->db->where('id_instansi', 11);
        $this->db->limit(1);    
        return $query = $this->db->get('user', 1)->row();
    }
    public function input_data($data)
    {
        $this->db->insert('user_online', $data);
    }
}

/* End of file ModelName.php */
?>