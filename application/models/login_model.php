<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function login ($username,$password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
		$this->db->where('id_instansi', 11);
        $this->db->limit(1);    
        return $query = $this->db->get('user', 1)->row();
    }
}

/* End of file ModelName.php */
?>