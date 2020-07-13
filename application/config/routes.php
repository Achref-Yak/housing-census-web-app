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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['fichetechnique/create'] = 'fichetechnique/create';
$route['fichetechnique/(:any)'] = 'fichetechnique/view/$1';
$route['fichetechnique'] = 'fichetechnique/index'; 
 
$route['local'] = 'local/index';
$route['missions'] = 'missions/index';
$route['missions/(:any)'] = 'missions/view/$1';
$route['local/createlocal/(:any)/(:any)'] = 'local/createlocal/$1/$2';
$route['local/create/(:any)/(:any)'] = 'local/create/$1/$2';
$route['local/updatelocal/(:any)'] = 'local/updatelocal/$1';
$route['local/createoccupant'] = 'local/createoccupant';
$route['local/updaterevente/(:any)'] = 'local/updaterevente/$1'; 
$route['local/update_dependance/(:any)'] = 'local/update_dependance/$1';

$route['local/create_resultat_interne/(:any)'] = 'local/create_resultat_interne/$1';
$route['local/create_resultat_nat/(:any)'] = 'local/create_resultat_nat/$1';
$route['local/create_commission_national/(:any)'] = 'local/create_commission_national/$1';
$route['local/create_commission_interne/(:any)'] = 'local/create_commission_interne/$1';
$route['local/create_dependance/(:any)'] = 'local/create_dependance/$1';
$route['local/(:any)/(:any)'] = 'local/view/$1/$2';
$route['local/revente/(:any)/(:any)'] = 'local/revente/$1/$2';
$route['immobilier/affecter/(:any)'] = 'immobilier/affecter/$1';
$route['immobilier/updateachat/(:any)'] = 'immobilier/updateachat/$1';
$route['immobilier/updategestion/(:any)'] = 'immobilier/updategestion/$1';
$route['immobilier/create_prop_bien/(:any)'] = 'immobilier/create_prop_bien/$1';
$route['immobilier/create_prop_reglement/(:any)'] = 'immobilier/create_prop_reglement/$1';
$route['immobilier/create_gerance/(:any)/(:any)/(:any)'] = 'immobilier/create_gerance/$1/$2/$3';
$route['immobilier/create'] = 'immobilier/create';
$route['immobilier/update'] = 'immobilier/update';
$route['immobilier/(:any)/(:any)'] = 'immobilier/view/$1/$2';
$route['(:any)'] = 'pages/view/$1';
$route['translate_uri_dashes'] = FALSE;
