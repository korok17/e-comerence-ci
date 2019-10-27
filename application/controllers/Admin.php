<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'dashboard';
        $this->themes->Admin('admin/dashboard', $data);
    }
    public function slider()
    {
        $data['title'] = 'dashboard';
        $this->themes->Admin('admin/portal/slider', $data);
    }
    public function save_slider()
    {
        if (!empty($_FILES['slider']['name'])) {
            $config['upload_path'] = "./assets/portal/banner";
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("slider")) {
                $dataimg = array('upload_data' => $this->upload->data());
                $image = $dataimg['upload_data']['file_name'];
                $data = $this->Model_admin_portal->insert_data(
                    'p_slider',
                    ['name_slider' => $image]
                );
            } else {
                $data = "tidak tersave";
            }
        } else {
            $data = "slider tidak terbaca";
        }
        echo json_encode($data);
    }
}
