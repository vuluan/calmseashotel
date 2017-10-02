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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Config Router Multi Language
$route["^(en|vn)"] = $route['default_controller'];


//Config Router Front End
$route["^(en|vn)/home"] 	= $route['default_controller'];
$route['^(en|vn)/contact'] 	= "home/contact";
$route['^(en|vn)/about'] 	= "home/about";
$route['^(en|vn)/news'] 	= "home/news";
$route['^(en|vn)/news-detail'] 	= "home/news_detail";
$route['^(en|vn)/room-detail'] 	= "home/room_detail";
$route['^(en|vn)/restaurant'] 	= "home/restaurant";
$route['^(en|vn)/restaurant1'] 	= "home/restaurant1";
$route['^(en|vn)/offers'] 		= "home/offers";
$route['^(en|vn)/offers-detail'] 		= "home/offers_detail";
$route['^(en|vn)/booking-step-1'] 		= "home/booking_step_1";
$route['^(en|vn)/booking-step-2'] 		= "home/booking_step_2";
$route['^(en|vn)/booking-step-3'] 		= "home/booking_step_3";
$route['^(en|vn)/booking-step-4'] 		= "home/booking_step_4";
// $route['^(en|jp)/categories/loadlist'] = "categories/loadlist";

//Config Router Admincp
$route[ADMINCP] = "admincp";
$route[ADMINCP.'/help'] = "admincp/help";
$route[ADMINCP.'/menu'] = "admincp/menu";
$route[ADMINCP.'/login'] = "admincp/login";
$route[ADMINCP.'/logout'] = "admincp/logout";
$route[ADMINCP.'/permission'] = "admincp/permission";
$route[ADMINCP.'/saveLog'] = "admincp/saveLog";
$route[ADMINCP.'/update_profile'] = "admincp/update_profile";
$route[ADMINCP.'/setting'] = "admincp/setting";
$route[ADMINCP.'/getSetting'] = "admincp/getSetting";
$route[ADMINCP.'/theme'] = "admincp_theme/admincp_index";
$route[ADMINCP.'/(:any)/(:any)/(:any)/(:any)'] = "$1/admincp_$2/$3/$4";
$route[ADMINCP.'/(:any)/(:any)/(:any)'] = "$1/admincp_$2/$3";
$route[ADMINCP.'/(:any)/(:any)'] = "$1/admincp_$2";
$route[ADMINCP.'/(:any)'] = "$1/admincp_index";