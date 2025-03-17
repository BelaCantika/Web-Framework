<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/daftar', 'Daftar::daftar');
$routes->get('/detail/(:num)', 'Detail::detail/$1');
