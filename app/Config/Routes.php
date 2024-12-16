<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('login_details', 'LoginController::login');
$routes->get('dashboard', 'ContentController::dashboard_details');
$routes->get('Logout', 'LoginController::Logout');

$routes->get('categories', 'ContentController::categories');
$routes->get('database', 'QueryController::update_database');
$routes->post('addCategory', 'ContentController::addCategory');
$routes->get('products', 'ProductController::product');
$routes->post('addProduct', 'ProductController::addproduct');
