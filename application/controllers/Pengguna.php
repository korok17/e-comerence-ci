<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Depan('depan/produk', $data);
    }
    public function category()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/template/kategori', $data);
    }
    public function account()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/account', $data);
    }
    public function cart()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/cart', $data);
    }
    public function bibit()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/bibit', $data);
    }
    public function comfirmation()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/comfirmation', $data);
    }
    public function contact()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/contact', $data);
    }
    public function howto()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/howto', $data);
    }
    public function member()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/member', $data);
    }
    public function pengiriman()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/pengiriman', $data);
    }
    public function product()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/product', $data);
    }
    public function checkout()
    {
        $data['title'] = 'dmiqa';
        $this->themes->Produk('depan/checkout', $data);
    }
}
