<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'Home::login');
$routes->get('dashboard', 'Home::dashboard');

$routes->get('user', 'Home::user');
$routes->get('userlist', 'Home::userlist');
$routes->get('add_user', 'Home::add_user');

$routes->post('add_user', 'Home::add_user');
$routes->get('edit_user/(:any)', 'Home::user/$1');







$routes->get('vendor', 'Home::vendor');
$routes->get('vendorlist', 'Home::vendorlist');
$routes->get('add_vendor', 'Home::add_vendor');

$routes->post('add_vendor', 'Home::add_vendor');
$routes->get('edit_vendor/(:any)', 'Home::vendor/$1');

$routes->get('product', 'Home::product');
$routes->get('productlist', 'Home::productlist');

$routes->get('productcategory', 'Home::productcategory');
$routes->get('productcategorylist', 'Home::productcategorylist');

$routes->get('country', 'Home::country');
$routes->get('countrylist', 'Home::countrylist');

$routes->get('state', 'Home::state');
$routes->get('statelist', 'Home::statelist');

$routes->get('city', 'Home::city');
$routes->get('citylist', 'Home::citylist');

$routes->get('menu', 'Home::menu');
$routes->get('menulist', 'Home::menulist');

$routes->get('reports', 'Home::reports');

$routes->get('delete/(:any)/(:any)','Home::delete/$1/$1');
$routes->post('delete/(:any)/(:any)','Home::delete/$1/$1');



$routes->post('get_state_name_location','Home::get_state_name_location');

$routes->post('get_city_name_location','Home::get_city_name_location');










