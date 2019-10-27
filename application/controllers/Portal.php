<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'dashboard';
        $this->themes->Portal('portal/produk', $data);
    }
    public function cart()
    {
        $data['title'] = 'dashboard';
        $this->themes->Portal('portal/cart/cart', $data);
    }
    public function category()
    {
        $data['title'] = 'dashboard';
        $this->themes->Portal('portal/categori/category', $data);
    }
    public function depan()
    {
        $data['title'] = 'dashboard';
        $this->load->view('portal/index', $data);
    }
}
