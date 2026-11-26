<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/students', 'Directory::index');
$routes->get('/students/(:num)', 'Directory::profile/$1');
