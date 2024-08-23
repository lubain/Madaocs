<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('accueil', 'Home::accueil');
$routes->get('search', 'Home::search');
$routes->get('search/detailSearch', 'Home::detailSearch');
$routes->get('sell', 'Home::sell');
$routes->get('sell/detailSell', 'Home::detailSell');
$routes->get('membres', 'Home::membres');
// $routes->get('admin', 'Home::admin');
$routes->get('login', 'Home::login');
$routes->get('update', 'Home::find');
$routes->get('delete', 'Home::delete');

$routes->post('login', 'Home::create');
$routes->post('update', 'Home::update');
