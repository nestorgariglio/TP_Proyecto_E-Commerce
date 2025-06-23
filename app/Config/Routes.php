<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'ViewsController::principal');
$routes->get('/about', 'ViewsController::about');
$routes->get('/marketing', 'ViewsController::marketing');
$routes->get('/contact', 'ViewsController::contact');
$routes->get('/terms', 'ViewsController::terms');





$routes->get('/order_detail', 'ViewsController::order_detail');
$routes->get('/admin-products', 'ViewsController::adminProducts');
$routes->get('/admin-products/add', 'ViewsController::adminProductForm');
$routes->get('/admin-products/edit/(:num)', 'ViewsController::adminProductForm/$1');



// Rutas para autenticación
$routes->get('/register', 'AuthController::registerView');
$routes->get('/login', 'AuthController::loginView');
$routes->post('/register', 'AuthController::register');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// Rutas para productos
$routes->get('/catalog', 'ProductController::catalog');
$routes->get('/product/(:num)', 'ProductController::detail/$1');

// Rutas para el carrito
$routes->get('/cart', 'CartController::index');
$routes->post('/cart/add/(:num)', 'CartController::add/$1');
$routes->post('/cart/update/(:num)', 'CartController::update/$1');
$routes->post('/cart/remove/(:num)', 'CartController::remove/$1');
$routes->get('/cart/clear', 'CartController::clear');

// Rutas del checkhout
$routes->get('/checkout', 'OrderController::checkout');
$routes->post('/checkout/process', 'OrderController::process');

// Rutas para los comprobantes
$routes->get('/orders', 'OrderController::list');
$routes->get('/orders/(:num)', 'OrderController::detail/$1');