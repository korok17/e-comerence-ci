<?php

class Menus extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('ssp');
        $this->load->model('Model_menu');
    }

    function data()
    {
        // nama tabel
        $table = 'x_menu';
        // nama PK
        $primaryKey = 'id';
        // list field
        $columns = array(
            array('db' => 'nama_menu', 'dt' => 0),
            array('db' => 'link', 'dt' => 1),
            array(
                'db' => 'is_main_menu',
                'dt' => 2,
                'formatter' => function ($d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return $d == 0 ? 'Main Menu' : 'Sub Menu';
                }
            ),
            array(
                'db' => 'id',
                'dt' => 3,
                'formatter' => function ($d) {
                    //return "<a href='edit.php?id=$d'>EDIT</a>";
                    return anchor('menus/edit/' . $d, '<i class="fa fa-edit"></i>', 'class="btn-sm btn-info ml-1" data-placement="top" data-original-title="Edit"') . ' 
                        ' . anchor('menus/delete/' . $d, '<i class="fa fa-trash"></i>', 'class="btn-sm btn-danger ml-1" data-placement="top" data-original-title="Delete"');
                }
            )
        );

        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

    function index()
    {
        $data['title'] = 'Menu';
        $this->themes->Admin('menu/list', $data);
    }

    function add()
    {
        if (isset($_POST['submit'])) {
            $this->Model_menu->save();
            redirect('menus');
        } else {
            $this->themes->Admin('menu/add');
        }
    }

    function edit()
    {
        if (isset($_POST['submit'])) {
            $this->Model_menu->update();
            redirect('menus');
        } else {
            $id           = $this->uri->segment(3);
            $data['menu'] = $this->db->get_where('x_menu', array('id' => $id))->row_array();
            $this->themes->Admin('menu/edit', $data);
        }
    }

    function delete()
    {
        $id = $this->uri->segment(3);
        if (!empty($id)) {
            // proses delete data
            $this->db->where('id', $id);
            $this->db->delete('x_menu');
        }
        redirect('menus');
    }
}
