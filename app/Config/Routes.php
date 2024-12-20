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
$routes->get('company', 'ProductController::company');
$routes->post('addCompany', 'ProductController::addCompany');
$routes->get('faqs', 'ContentController::faqs');
$routes->post('addFaqs', 'ContentController::addQuestion');
$routes->get('partners', 'ContentController::patners');
$routes->post('addPatners', 'ContentController::addPatners');
$routes->get('testimonials', 'ContentController::testimonials');
$routes->post('addTestimonial', 'ContentController::addTestimonial');
$routes->get('messages', 'ContentController::contactus_msg');
$routes->get('users', 'ContentController::users_list');
$routes->post('addUsers', 'ContentController::addUsers');
