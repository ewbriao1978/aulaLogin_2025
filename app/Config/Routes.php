<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::showLogin');
$routes->get('/register', 'Home::registerUser');
$routes->post('/register', 'Home::registerUserInDataBase');
$routes->post('/login', 'Home::loginUser');
$routes->get('/home', 'Home::enterMyHome');
$routes->get('/logout', 'Home::logoutUser');
$routes->get('/home_adm', 'Home::enterMyHomeAdm');
