<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/anggota', 'AnggotaController::index');
$routes->get('/anggota/form', 'AnggotaController::form');
$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('/anggota/create', 'AnggotaController::create');
$routes->post('/anggota/hapus', 'AnggotaController::hapus');

$routes->get('/pengguna', 'PenggunaController::index');
$routes->get('/pengguna/form', 'PenggunaController::form');
$routes->get('/pengguna/edit/(:num)', 'PenggunaController::edit/$1');
$routes->post('/pengguna/create', 'PenggunaController::create');
$routes->post('/pengguna/hapus', 'PenggunaController::hapus');

$routes->get('/penerbitt', 'PenerbitController::index');
$routes->get('/penerbitt/form', 'PenerbitController::form');
$routes->get('/penerbitt/edit/(:num)', 'PenerbitController::edit/$1');
$routes->post('/penerbitt/create', 'PenerbitController::create');
$routes->post('/penerbitt/hapus', 'PenerbitController::hapus');
