<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'Home::login');
$routes->get('home', 'Home::index');
$routes->get('home/(:any)', 'Home::index/$1');

$routes->get('category/(:any)', 'Home::category/$1');
$routes->post('category/(:any)', 'Home::category/$1');


$routes->get('category', 'Home::category');
$routes->post('category', 'Home::category');



$routes->get('billing', 'Home::billing');
$routes->get('addProduct', 'Home::addProduct');

$routes->post('get_product_and_shops', 'Home::get_product_and_shops');
$routes->get('get_product_and_shops', 'Home::get_product_and_shops');


$routes->post('get_search_cities', 'Home::get_search_cities');
$routes->get('get_search_cities', 'Home::get_search_cities');

$routes->get('productdetail', 'Home::productdetail');
$routes->get('shopdetail', 'Home::shopdetail');

$routes->get('user-register', 'Home::userregister');
$routes->get('shop-register', 'Home::shopregister');


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

$routes->get('add_shop', 'Home::add_shop');
$routes->post('add_shop', 'Home::add_shop');

$routes->get('product', 'Home::product');
$routes->get('productlist', 'Home::productlist');
$routes->get('add_product', 'Home::add_product');

$routes->post('add_product', 'Home::add_product');
$routes->get('edit_product/(:any)', 'Home::product/$1');


$routes->get('banner', 'Home::banner');
$routes->get('bannerlist', 'Home::bannerlist');
$routes->get('add_banner', 'Home::add_banner');

$routes->post('add_banner', 'Home::add_banner');
$routes->get('edit_banner/(:any)', 'Home::banner/$1');

$routes->get('productcategory', 'Home::productcategory');
$routes->get('productcategorylist', 'Home::productcategorylist');
$routes->get('add_productcategory', 'Home::add_productcategory');

$routes->post('add_productcategory', 'Home::add_productcategory');
$routes->get('edit_productcategory/(:any)', 'Home::productcategory/$1');

$routes->get('productsubcategory', 'Home::productsubcategory');
$routes->get('productsubcategorylist', 'Home::productsubcategorylist');
$routes->get('add_productsubcategory', 'Home::add_productsubcategory');

$routes->post('add_productsubcategory', 'Home::add_productsubcategory');
$routes->get('edit_productsubcategory/(:any)', 'Home::productsubcategory/$1');

$routes->get('country', 'Home::country');
$routes->get('countrylist', 'Home::countrylist');

$routes->get('state', 'Home::state');
$routes->get('statelist', 'Home::statelist');

$routes->get('city', 'Home::city');
$routes->get('citylist', 'Home::citylist');

$routes->get('menu', 'Home::menu');
$routes->get('menulist', 'Home::menulist');
$routes->get('add_menu', 'Home::add_menu');

$routes->post('add_menu', 'Home::add_menu');
$routes->get('edit_menu/(:any)', 'Home::menu/$1');

$routes->get('reports', 'Home::reports');

$routes->get('delete/(:any)/(:any)','Home::delete/$1/$1');
$routes->post('delete/(:any)/(:any)','Home::delete/$1/$1');



$routes->post('get_state_name_location','Home::get_state_name_location');

$routes->post('get_city_name_location','Home::get_city_name_location');

$routes->post('add_customer','Home::add_customer');
$routes->get('add_customer','Home::add_customer');









