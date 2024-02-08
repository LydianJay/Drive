<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login', 'Home::login');
$routes->get('/Register', 'CreateAccount::index');
$routes->post('/create', 'CreateAccount::create');
$routes->get('/dashboard', 'DashBoard::index');