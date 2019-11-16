<?php
class Model_auth extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }
    //function login portal
    public function prosesLoginAdmin($username)
    {
        $get_data = $this->db->get_where('user', ['email' => $username,]);
        return $get_data;
    }
    public function ubahip($table, $data, $where)
    {
        $ubah_ip =  $this->db->where($where)
            ->update($table, $data);
        return $ubah_ip;
    }
}
