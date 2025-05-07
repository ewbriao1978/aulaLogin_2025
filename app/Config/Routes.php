<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::showLogin');
$routes->get('/register', 'Home::registerUser');
$routes->post('/register', 'Home::registerUserInDataBase');
