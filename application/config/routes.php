<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('API_BASE_URL','api');

// AUTH
$route[API_BASE_URL.'/auth/email_login']="api/authController/email_login";
$route[API_BASE_URL.'/auth/phone_login']="api/authController/phone_login";




$route['default_controller'] = 'root';
$route['404_override'] = 'root/_404';
$route['translate_uri_dashes'] = FALSE;
 