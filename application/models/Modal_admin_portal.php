<?php
class Model_admin_portal extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    function insert_data($table, $data)
    {
        $query = $this->db->insert($table, $data);
        if ($query) {
            $data = array("message" => "success");
        } else {
            $data = array("message" => "failed");
        }
        return $data;
    }
}
