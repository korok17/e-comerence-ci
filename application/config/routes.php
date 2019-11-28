<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'pengguna';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// admin
$route['slider'] = 'admin/slider';
$route['kategori_barang'] = 'admin/kategoriBarang';
$route['barang'] = 'admin/barang';

// saving
$route['save_slider'] = 'admin/save_slider';
$route['save_kategori_barang'] = 'admin/save_kategori_barang';
$route['save_barang'] = 'admin/save_barang';

// show
$route['show_slider'] = 'admin/show_slider';
$route['show_kategori_barang'] = 'admin/show_kategori_barang';
$route['show_barang'] = 'admin/show_barang';

// edit 
$route['update_slider'] = 'admin/edit_slider';
$route['update_kategori_barang'] = 'admin/edit_kategori_barang';
$route['update_barang'] = 'admin/edit_barang';


//--- getting
$route['get_slider'] = 'admin/get_slider';
$route['get_kategori_barang'] = 'admin/get_kategori_barang';
$route['get_barang'] = 'admin/get_barang';


//deleting

$route['delete_slider'] = 'admin/delete_slider';
$route['delete_kategori_barang'] = 'admin/delete_kategori_barang';
$route['delete_barang'] = 'admin/delete_barang';

//form 
$route['form_barang'] = 'admin/form_barang';

// portal
$route['cart'] = 'pengguna/cart';
$route['category'] = 'pengguna/category';
$route['account'] = 'pengguna/account';
$route['category'] = 'pengguna/category';
$route['bibit'] = 'pengguna/bibit';
$route['cart'] = 'pengguna/cart';
$route['comfirmation'] = 'pengguna/comfirmation';
$route['contact'] = 'pengguna/contact';
$route['product'] = 'pengguna/product';
$route['pengiriman'] = 'pengguna/pengiriman';
$route['member'] = 'pengguna/member';
$route['checkout'] = 'pengguna/checkout';
$route['toko'] = 'pengguna/toko';


//login
$route['login'] = 'auth/auth_depan';
$route['registrasi'] = 'auth/daftar';
$route['forget-password'] = 'auth/forgetPassword';

//logout
$route['logout'] = 'auth/logout';
