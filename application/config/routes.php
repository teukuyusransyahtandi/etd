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
$route['prodi'] = 'Home/judul_prodi';
$route['daftar'] = 'Login/register';
$route['upload'] = 'Upload';
$route['konfirmasi'] = 'Konfirmasi';
$route['judul'] = 'judul';//hanya bisa lihat judul per jurusan jika adamin
$route['judul_admin'] = 'judul/admin';
$route['cari'] = 'Cari';
$route['detail_judul'] = 'Judul/detail_judul';
$route['detail_judul_admin'] = 'Judul/detail_judul_admin';


/*-----------------------------------------------------------------------*/
$route['prodi'] = 'Prodi';
$route['tambah_prodi'] = 'Prodi/prodi';
$route['edit_prodi'] = 'Prodi/edit_dosen';
$route['hapus_prodi'] = 'Prodi/hapus_prodi';
/*-----------------------------------------------------------------------*/
$route['dosen'] = 'Dosen';
$route['tambah_dosen'] = 'Dosen/tambah_dosen';
$route['edit_dosen'] = 'Dosen/edit_dosen';
$route['hapus_dosen'] = 'Dosen/hapus_dosen';

/*-----------------------------------------------------------------------*/
$route['bidang'] = 'Bidang_minat';
$route['tambah_bidang'] = 'Bidang_minat/tambah_dosen';
$route['edit_bidang'] = 'Bidang_minat/edit_dosen';
$route['hapus_bidang'] = 'Bidang_minat/hapus_dosen';



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
