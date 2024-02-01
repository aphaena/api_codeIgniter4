<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// route devis
$routes->get('devis', 'DevisController::index');
$routes->get('devis/create', 'DevisController::create');
$routes->get('devis/view/(:num)', 'DevisController::view/$1');
$routes->get('devis/edit/(:num)', 'DevisController::edit/$1');
$routes->post('devis/store', 'DevisController::store');
$routes->post('devis/update/(:segment)', 'DevisController::update/$1');
$routes->get('devis/delete/(:segment)', 'DevisController::delete/$1');

$routes->get('devis/compose', 'DevisController::compose');
$routes->post('devis/save', 'DevisController::save');

// Routes items
$routes->get('items', 'ItemController::index');

$routes->get('items/create', 'ItemController::create');
$routes->post('items/store', 'ItemController::store');
$routes->get('items/edit/(:num)', 'ItemController::edit/$1');
$routes->post('items/update/(:segment)', 'ItemController::update/$1');
$routes->get('items/delete/(:segment)', 'ItemController::delete/$1');
