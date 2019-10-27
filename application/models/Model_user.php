<?php
class Model_user extends CI_Model
{

    function chekLogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password',  md5($password));
        //	$this->db->where('id_level_user', '1');
        $user = $this->db->get('x_tbluser')->row_array();
        return $user;
    }

    function chekUser($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password',  md5($password));
        //	$this->db->where('id_level_user', '3');
        $user = $this->db->get('x_tbluser')->row_array();
        return $user;
    }

    function chekLogin_member($username, $password)
    {
        $this->db->where('npwpd', $username);
        $this->db->where('password',  md5($password));
        //$this->db->where('id_level_user', '1');
        $user = $this->db->get('x_regpribadi')->row_array();
        return $user;
    }
}
