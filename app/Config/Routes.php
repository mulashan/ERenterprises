<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('login_details', 'LoginController::login');
$routes->get('dashboard', 'ContentController::dashboard_details');
$routes->get('Logout', 'LoginController::Logout');
