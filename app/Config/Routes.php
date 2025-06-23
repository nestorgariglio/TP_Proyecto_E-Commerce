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
$routes->get('/login', 'ViewsController::loginView');
$routes->get('/register', 'ViewsController::registerView');
$routes->get('/catalog', 'ViewsController::catalog');
$routes->get('/product', 'ViewsController::product');
$routes->get('/cart', 'ViewsController::cart');
$routes->get('/orders', 'ViewsController::orders');
$routes->get('/order_detail', 'ViewsController::order_detail');
$routes->get('/admin-products', 'ViewsController::adminProducts');
$routes->get('/admin-products/add', 'ViewsController::adminProductForm');
$routes->get('/admin-products/edit/(:num)', 'ViewsController::adminProductForm/$1');
// Ejemplos para rutas de pedidos y carrito
// Puedes descomentar y ajustar según tu lógica de negocio
// $routes->get('/orders/(:num)', 'ViewsController::order/$1');
// $routes->get('/order_details/(:num)', 'ViewsController::orderDetails/$1');

// $routes->post('/cart/add', 'CartController::add');
// $routes->post('/cart/update/(:num)', 'CartController::update/$1');
// $routes->post('/cart/remove/(:num)', 'CartController::remove/$1');
// $routes->post('/checkout', 'CheckoutController::processCheckout');
