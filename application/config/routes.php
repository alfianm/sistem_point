<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'goadmin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'backend/dashboard';
$route['customer'] = 'backend/customer';
$route['hadiah'] = 'backend/hadiah';
$route['transaksi'] = 'backend/transaksi';