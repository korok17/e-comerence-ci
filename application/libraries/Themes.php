<?php
if (!defined('BASEPATH')) exit('no file allowed');
class Themes
{
    protected $_ci;
    function __construct()
    {
        $this->_ci = &get_instance();
    }
    function Portal($theme, $data = null)
    {
        $data['content'] = $this->_ci->load->view($theme, $data, true);
        $data['menu'] = $this->_ci->load->view('/portal/template/menu.php', $data, true);
        $data['header'] = $this->_ci->load->view('/portal/template/header.php', $data, true);
        $data['slider'] = $this->_ci->load->view('/portal/template/slider.php', $data, true);
        $data['produk'] = $this->_ci->load->view('/portal/template/produk.php', $data, true);
        $data['boxes'] = $this->_ci->load->view('/portal/template/boxes.php', $data, true);
        $data['features'] = $this->_ci->load->view('/portal/template/features.php', $data, true);
        $data['footer'] = $this->_ci->load->view('/portal/template/footer.php', $data, true);
        $this->_ci->load->view('/portal/portal.php', $data);
    }
    function Depan($theme, $data = null)
    {
        $data['content'] = $this->_ci->load->view($theme, $data, true);
        $data['menu'] = $this->_ci->load->view('/depan/template/menu.php', $data, true);
        $data['header'] = $this->_ci->load->view('/depan/template/header.php', $data, true);
        $data['slider'] = $this->_ci->load->view('/depan/template/slider.php', $data, true);
        $data['produk'] = $this->_ci->load->view('/depan/template/produk.php', $data, true);
        $data['boxes'] = $this->_ci->load->view('/depan/template/boxes.php', $data, true);
        $data['features'] = $this->_ci->load->view('/depan/template/features.php', $data, true);
        $data['footer'] = $this->_ci->load->view('/depan/template/footer.php', $data, true);
        $this->_ci->load->view('/depan/depan.php', $data);
    }
    function Produk($theme, $data = null)
    {
        $data['content'] = $this->_ci->load->view($theme, $data, true);
        $data['menu'] = $this->_ci->load->view('/depan/template/menu_all.php', $data, true);
        // $data['home'] = $this->_ci->load->view('/depan/template/home_all.php', $data, true);
        $data['header'] = $this->_ci->load->view('/depan/template/header_all.php', $data, true);
        $data['footer'] = $this->_ci->load->view('/depan/template/footer_all.php', $data, true);
        $this->_ci->load->view('/depan/category.php', $data);
    }

    function Admin($theme, $data = null)
    {
        $data['content'] = $this->_ci->load->view($theme, $data, true);
        $data['navbar'] = $this->_ci->load->view('/admin/template/navbar.php', $data, true);
        $data['sidbar'] = $this->_ci->load->view('/admin/template/sidbar.php', $data, true);
        // $data['topbar'] = $this->_ci->load->view('/admin/template/topbar.php', $data, true);
        $data['footer'] = $this->_ci->load->view('/admin/template/footer.php', $data, true);
        $this->_ci->load->view('/admin/admin.php', $data);
    }
}
