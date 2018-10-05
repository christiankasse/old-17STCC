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

$route['crud/upload_predication'] 	= 'crud/upload_predication';
$route['crud/update_slide']          	= 'crud/update_slide';
$route['crud/community']             	= 'crud/community';
$route['crud/speech']             	= 'crud/speech';
$route['crud/cpart']             	= 'crud/cpart';
$route['crud/mission']             	= 'crud/mission';
$route['crud/slides']             	= 'crud/slides';

$route['admin/feed']         	= 'admin/feed';
$route['admin/members']      	= 'admin/members';
$route['admin/onlines']      	= 'admin/onlines';
$route['admin/users']        	= 'admin/users';
$route['admin/community']   	= 'admin/community';
$route['admin/speech']      	= 'admin/speech';
$route['admin/cpart']    		= 'admin/cpart';
$route['admin/mission']      	= 'admin/mission';
$route['admin/slides']       	= 'admin/slides';
$route['admin/feed']         	= 'admin/feed';

$route['contact'] = 'contact';

$route['archives'] = 'archives';

$route['events'] = 'events';

$route['news/slug'] = 'news/slug';
$route['news'] = 'news';

$route['about/fonctionnement'] = 'about/fonctionnement';
$route['about'] = 'about';


$route['mission/social_work'] = 'mission/social_work';
$route['mission/familly'] = 'mission/familly';
$route['mission/education'] = 'mission/education';
$route['mission/evangelization'] = 'mission/evangelization';


$route['feed/speech'] = 'feed/speech';
$route['feed/community'] = 'feed/community';
$route['feed/society'] = 'feed/society';
$route['feed/mission'] = 'feed/mission';


$route['login/dologin']        = 'login/dologin';
$route['login/actionRegister'] = 'login/actionRegister';
$route['login/register']       = 'login/register';
$route['login/logout']         = 'login/logout';
$route['login']                = 'login';


$route['default_controller'] = 'feed';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
