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
