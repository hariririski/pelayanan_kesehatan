<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
/*-----------------------------------------------------------------------*/
$route['default_controller'] = 'Home';
$route['home'] = 'Home';
$route['help'] = 'Home/help';
$route['home_admin'] = 'Home_admin';
$route['peta'] = 'Peta';
$route['popup'] = 'Peta/popup';

/*-----------------------------------------------------------------------*/
$route['pengaduan'] = 'Pengaduan';
$route['tambah_pengaduan'] = 'Pengaduan/tambah_pengaduan';
$route['detail_pengaduan'] = 'Pengaduan/detail_pengaduan';
$route['verifikasi_pengaduan'] = 'Pengaduan/verifikasi_pengaduan';

/*-----------------------------------------------------------------------*/
$route['kabupaten'] = 'Kabupaten';
$route['tambah_kabupaten'] = 'Kabupaten/tambah_kabupaten';
$route['ubah_kabupaten'] = 'Kabupaten/ubah_kabupaten';

/*-----------------------------------------------------------------------*/
$route['kecamatan'] = 'Kecamatan';
$route['tambah_kecamatan'] = 'Kecamatan/tambah_kecamatan';
$route['ubah_kecamatan'] = 'Kecamatan/ubah_kecamatan';

/*-----------------------------------------------------------------------*/
$route['jalan'] = 'Jalan';
$route['tambah_jalan'] = 'Jalan/tambah_jalan';
$route['edit_jalan'] = 'Jalan/edit_jalan';
$route['detail_jalan'] = 'Jalan/detail_jalan';

/*-----------------------------------------------------------------------*/
$route['tambah_jalan_rusak'] = 'Jalan_rusak/tambah_jalan_rusak';
$route['jalan_rusak'] = 'Jalan_rusak';
$route['detail_jalan_rusak'] = 'Jalan_rusak/detail_jalan_rusak';
$route['edit_jalan_rusak'] = 'Jalan_rusak/edit_jalan_rusak';


/*-----------------------------------------------------------------------*/
$route['admin'] = 'Admin';
$route['tambah_admin'] = 'Admin/tambah_admin';
$route['ubah_password'] = 'Admin/ubah_password';
$route['ubah_profil'] = 'Admin/ubah_profil';

/*-----------------------------------------------------------------------*/
$route['login'] = 'Login';
$route['logout'] = 'Login/logout';

/*-----------------------------------------------------------------------*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
