<?php

class Model_admin_portal extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    //Universal Get Data => row_array();
    public function get_data_array($table)
    {
        return $this->db->get($table)->row_array();
    }

    //Universal Get Data With Order
    public function get_data_with_order($table, $order, $type)
    {
        $this->db->order_by($order, $type);
        return $this->db->get($table)->result();
    }

    //Universal Get Data With Order => row_array();
    public function get_data_with_order_array($table, $order, $type)
    {
        $this->db->order_by($order, $type);
        return $this->db->get($table)->row_array();
    }

    //Universal Get Where Data
    public function get_where($table, $where)
    {

        return $this->db->get_where($table, $where);
    }

    //Universal Get Where Data => row_array();
    public function get_where_array($table, $where)
    {
        $this->db->where($where);
        return $this->db->get($table)->row_array();
    }

    //Universal Get Where Data With Order
    public function get_where_with_order($table, $where, $order, $type)
    {
        $this->db->where($where);
        $this->db->order_by($order, $type);
        return $this->db->get($table)->result();
    }

    //Universal Get Where Data With Order => row_array();
    public function get_where_with_order_array($table, $where, $order, $type)
    {
        $this->db->where($where);
        $this->db->order_by($order, $type);
        return $this->db->get($table)->row_array();
    }

    //Universal Get Or Where Data
    public function get_or_where($table, $where, $or_where)
    {
        $this->db->where($where);
        $this->db->or_where($or_where);
        return $this->db->get($table)->result();
    }

    //Universal Get Or Where Data => row_array();
    public function get_or_where_array($table, $where, $or_where)
    {
        $this->db->where($where);
        $this->db->or_where($or_where);
        return $this->db->get($table)->row_array();
    }

    //Universal Get Or Where Data With Order
    public function get_or_where_with_order($table, $where, $or_where, $order, $type)
    {
        $this->db->where($where);
        $this->db->or_where($or_where);
        $this->db->order_by($order, $type);
        return $this->db->get($table)->result();
    }

    //Universal Get Or Where Data With Order => row_array();
    public function get_or_where_with_order_array($table, $where, $or_where, $order, $type)
    {
        $this->db->where($where);
        $this->db->or_where($or_where);
        $this->db->order_by($order, $type);
        return $this->db->get($table)->row_array();
    }

    //Universal Get 2 Table
    public function get_join_two_table($table_1, $table_2, $where_t2_to_t1)
    {
        $this->db->select("*");
        $this->db->from($table_1);
        $this->db->join($table_2, $where_t2_to_t1);
        return $this->db->get()->result();
    }

    //Universal Get 2 Table => row_array();
    public function get_join_two_table_array($table_1, $table_2, $where_t2_to_t1)
    {
        $this->db->select("*");
        $this->db->from($table_1);
        $this->db->join($table_2, $where_t2_to_t1);
        return $this->db->get()->row_array();
    }

    //Universal Get 2 Table With Condition
    public function get_join_two_table_with_where($table_1, $table_2, $where_t2_to_t1, $where_condition)
    {
        $this->db->select("*");
        $this->db->from($table_1);
        $this->db->join($table_2, $where_t2_to_t1);
        $this->db->where($where_condition);
        return $this->db->get()->result();
    }

    //Universal Get 2 Table With Condition => row_array();
    public function get_join_two_table_with_where_array($table_1, $table_2, $where_t2_to_t1, $where_condition)
    {
        $this->db->select("*");
        $this->db->from($table_1);
        $this->db->join($table_2, $where_t2_to_t1);
        $this->db->where($where_condition);
        return $this->db->get()->row_array();
    }

    //Universal Get 2 Table With Order By
    public function get_join_two_table_with_order($table_1, $table_2, $where_t2_to_t1, $order, $type)
    {
        $this->db->select("*");
        $this->db->from($table_1);
        $this->db->join($table_2, $where_t2_to_t1);
        $this->db->order_by($order, $type);
        return $this->db->get()->result();
    }

    //Universal Get 2 Table With Order By => row_array();
    public function get_join_two_table_with_order_array($table_1, $table_2, $where_t2_to_t1, $order, $type)
    {
        $this->db->select("*");
        $this->db->from($table_1);
        $this->db->join($table_2, $where_t2_to_t1);
        $this->db->order_by($order, $type);
        return $this->db->get()->row_array();
    }

    //Universal Get 2 Table With Condition And Order By
    public function get_join_two_table_with_where_and_order($table_1, $table_2, $where_t2_to_t1, $where_condition, $order, $type)
    {
        $this->db->select("*");
        $this->db->from($table_1);
        $this->db->join($table_2, $where_t2_to_t1);
        $this->db->where($where_condition);
        $this->db->order_by($order, $type);
        return $this->db->get()->result();
    }

    //Universal Get 2 Table With Condition And Order By => row_array();
    public function get_join_two_table_with_where_and_order_array($table_1, $table_2, $where_t2_to_t1, $where_condition, $order, $type)
    {
        $this->db->select("*");
        $this->db->from($table_1);
        $this->db->join($table_2, $where_t2_to_t1);
        $this->db->where($where_condition);
        $this->db->order_by($order, $type);
        return $this->db->get()->row_array();
    }

    function deletedata($table, $where)
    {
        //$this->db->where($where);
        return $this->db->delete($table, $where);
        /*if($query){
             $data =  array("message" => "success");
        }
        else{
             $data =  array("message" => "error");
        }
        return $data;*/
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

    function update_data($where, $table, $data)
    {
        $this->db->where($where);
        $query = $this->db->update($table, $data);
        if ($query) {
            $return = array("message" => $where);
        } else {
            $return = array("message" => "failed");
        }
        return $return;
    }
}
