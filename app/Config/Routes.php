<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproducts', 'ProductController::insertProduct');
$routes->get('product', 'ProductController::readProduct');