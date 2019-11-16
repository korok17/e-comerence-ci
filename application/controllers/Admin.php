<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
    }
    public function index()
    {
        // $ci = $this->session->userdata('email');
        // var_dump($ci);
        // die;
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
        $title = $this->input->post('title');
        $subtitle = $this->input->post('subtitle');
        if (!empty($_FILES['slider_gambar']['name'])) {
            $config['upload_path'] = "./assets/portal/banner";
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("slider_gambar")) {
                $dataimg = array('upload_data' => $this->upload->data());
                $image = $dataimg['upload_data']['file_name'];
            }
        }

        $data = $this->Model_admin_portal->insert_data('z_slider', ['slider' => $image, 'title' => $title, 'subtitle' => $subtitle]);
        echo json_encode($data);
    }
    public function show_slider()
    {
        $data['data'] = $this->Model_admin_portal->get_data('z_slider')
            ->result_array();
        echo json_encode($data);
    }
    public function edit_slider()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $subtitle = $this->input->post('subtitle');
        $gedata = $this->Model_admin_portal->get_where('z_slider', ['id_slider' => $id])->row();
        if (!empty($_FILES['slider_gambar']['name'])) {
            $config['upload_path'] = "./assets/portal/banner";
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("slider_gambar")) {
                $dataimg = array('upload_data' => $this->upload->data());
                $image = $dataimg['upload_data']['file_name'];
            }
        } else {
            $image = $gedata->slider;
        }
        $data = $this->Model_admin_portal->update_data(
            ['id_slider' => $id],
            'z_slider',
            [
                'slider' => $image,
                'title' => $title,
                'subtitle' => $subtitle
            ]
        );
        echo json_encode($data);
    }

    public function get_slider()
    {
        $id = $this->input->post('id');
        $data = $this->Model_admin_portal->get_where_array('z_slider', ['id_slider' => $id]);
        echo json_encode($data);
    }
    public function delete_slider()
    {
        $id = $this->input->post('id');
        $sql = $this->Model_admin_portal->deletedata('z_slider', [
            'id_slider' => $id,
        ]);

        $data =  array("message" => "berhasil");
        echo json_encode($data);
    }
    public function kategoriBarang()
    {
        $data['title'] = 'dashboard';
        $this->themes->Admin('admin/portal/kategori_barang', $data);
    }
    public function show_kategori_barang()
    {
        $data['data'] = $this->Model_admin_portal->get_data('z_kategori_barang')
            ->result_array();
        echo json_encode($data);
    }
    public function save_kategori_barang()
    {
        $kategori = $this->input->post('kategori_barang');
        $data = $this->Model_admin_portal->insert_data('z_kategori_barang', ['nama_kategori' => $kategori]);
        echo json_encode($data);
    }
    public function edit_kategori_barang()
    {
        $id = $this->input->post('id');
        $kategori = $this->input->post('kategori_barang');
        $data = $this->Model_admin_portal->update_data(
            ['kd_kategori_barang' => $id],
            'z_kategori_barang',
            [
                'nama_kategori' => $kategori
            ]
        );
        echo json_encode($data);
    }

    public function get_kategori_barang()
    {
        $id = $this->input->post('id');
        $data = $this->Model_admin_portal->get_where_array('z_kategori_barang', ['kd_kategori_barang' => $id]);
        echo json_encode($data);
    }
    public function delete_kategori_barang()
    {
        $id = $this->input->post('id');
        $sql = $this->Model_admin_portal->deletedata('z_kategori_barang', [
            'kd_kategori_barang' => $id,
        ]);

        $data =  array("message" => "berhasil");
        echo json_encode($data);
    }
    public function barang()
    {
        $data['title'] = 'dashboard';
        $this->themes->Admin('admin/portal/barang', $data);
    }
    public function form_barang()
    {
        $uri = $this->uri->segment(2);
        if (isset($uri)) {
            $data['getdata'] = $this->Model_admin_portal->get_where('z_barang', ['kd_barang' => $uri])->row();
        }
        $data['title'] = "Form Barang";
        $data['kategori'] = $this->Model_admin_portal->get_data('z_kategori_barang')->result();
        $this->themes->Admin('admin/portal/form_barang', $data);
    }
    public function show_barang()
    {
        $data['data'] = $this->Model_admin_portal->get_data('z_barang')
            ->result_array();
        echo json_encode($data);
    }
    public function save_barang()
    {
        $kategori = $this->input->post('kategori');
        $nama_barang = $this->input->post('nama_barang');
        $jenis_barang = $this->input->post('jenis_barang');
        $harga_barang = $this->input->post('harga_barang');
        $jumlah_barang = $this->input->post('jumlah_barang');
        $deskripsi_barang = $this->input->post('deskripsi_barang');
        if (!empty($_FILES['gambar_barang']['name'])) {
            $config['upload_path'] = "./assets/portal/barang";
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload("gambar_barang")) {
                $dataimg = array('upload_data' => $this->upload->data());
                $gambar_barang = $dataimg['upload_data']['file_name'];
            }
        }
        $data = $this->Model_admin_portal->insert_data(
            'z_barang',
            [
                'kd_kategori_barang' => $kategori,
                'nama_barang' => $nama_barang,
                'jenis_barang' => $jenis_barang,
                'gambar_barang' => $gambar_barang,
                'harga' => $harga_barang,
                'stok' => $jumlah_barang,
                'deskripsi' => $deskripsi_barang
            ]
        );
        echo json_encode($data);
    }
    public function edit_barang()
    {
        $id = $this->input->post('id');
        $kategori = $this->input->post('kategori_barang');
        $data = $this->Model_admin_portal->update_data(
            ['kd_kategori_barang' => $id],
            'z_kategori_barang',
            [
                'nama_kategori' => $kategori
            ]
        );
        echo json_encode($data);
    }

    public function get_barang()
    {
        $id = $this->input->post('id');
        $data = $this->Model_admin_portal->get_where_array('z_kategori_barang', ['kd_kategori_barang' => $id]);
        echo json_encode($data);
    }
    public function delete_barang()
    {
        $id = $this->input->post('id');
        $sql = $this->Model_admin_portal->deletedata('z_barang', [
            'kd_barang' => $id,
        ]);

        $data =  array("message" => "berhasil");
        echo json_encode($data);
    }
}
