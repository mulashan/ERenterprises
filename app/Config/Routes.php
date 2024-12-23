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
$routes->post('deleteItem', 'ContentController::itemToDelete');

$routes->get('edit_company/(:num)', 'ContentController::edit_company/$1');
$routes->post('update_company', 'ContentController::update_company');
$routes->get('edit_product/(:num)', 'ProductController::edit_product/$1');
$routes->post('update_product', 'ProductController::update_product');
$routes->get('edit_category/(:num)', 'ContentController::edit_category/$1');
$routes->post('update_category', 'ContentController::update_category');
$routes->get('edit_testimonial/(:num)', 'ContentController::edit_testimonial/$1');
$routes->post('update_testimonial', 'ContentController::update_testimonial');
$routes->get('edit_faq/(:num)', 'ContentController::edit_faq/$1');
$routes->post('update_faq', 'ContentController::update_faq');
$routes->get('edit_patner/(:num)', 'ContentController::edit_patner/$1');
$routes->post('update_patner', 'ContentController::update_patner');

$routes->get('edit_user/(:num)', 'ContentController::edit_user/$1');
$routes->post('update_user', 'ContentController::update_user');


