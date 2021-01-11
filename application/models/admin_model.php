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
    function grafik() { 
        $sql= $this->db->query("
            select
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=1)AND (YEAR(tanggal)=2020))),0) AS `Januari`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=2)AND (YEAR(tanggal)=2020))),0) AS `Februari`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=3)AND (YEAR(tanggal)=2020))),0) AS `Maret`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=4)AND (YEAR(tanggal)=2020))),0) AS `April`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=5)AND (YEAR(tanggal)=2020))),0) AS `Mei`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=6)AND (YEAR(tanggal)=2020))),0) AS `Juni`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=7)AND (YEAR(tanggal)=2020))),0) AS `Juli`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=8)AND (YEAR(tanggal)=2020))),0) AS `Agustus`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=9)AND (YEAR(tanggal)=2020))),0) AS `September`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=10)AND (YEAR(tanggal)=2020))),0) AS `Oktober`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=11)AND (YEAR(tanggal)=2020))),0) AS `November`,
            ifnull((SELECT count(id_antrian) FROM (antrian)WHERE((Month(tanggal)=12)AND (YEAR(tanggal)=2020))),0) AS `Desember`
            from antrian GROUP BY YEAR(tanggal) ");
    
    return $sql;
    
 } 
}
?>