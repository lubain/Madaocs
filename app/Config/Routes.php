<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::home');
$routes->get('search', 'Home::search');
$routes->get('sell', 'Home::sell');
$routes->get('search/detailSearch/(:num)', 'Home::detailSearch/$1');
$routes->get('sell/detailSell', 'Home::detailSell');

// ------------------------------

$routes->get('admin', 'Home::admin');
$routes->get('userList', 'Home::userList');
$routes->get('produitList', 'Home::produitList');
$routes->get('upload', 'Home::upload');
$routes->get('createUser', 'Home::formUser');
$routes->get('createProduit', 'Home::formProduit');
$routes->get('update/user/(:num)', 'Home::findUser/$1');
$routes->get('update/produit/(:num)', 'Home::findProduit/$1');
$routes->get('delete/user/(:num)', 'Home::deleteUser/$1');
$routes->get('delete/produit/(:num)', 'Home::deleteProduit/$1');

$routes->post('createUser', 'Home::createUser');
$routes->post('createProduit', 'Home::createProduit');
$routes->post('upload', 'Home::uploadFile');
$routes->post('update/user/(:num)', 'Home::userUpdate/$1');
$routes->post('update/produit/(:num)', 'Home::produitUpdate/$1');
