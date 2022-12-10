<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('PengecekanController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'Home::login');

$routes->get('/barang', 'BarangController::index');
$routes->post('/tambah-barang', 'BarangController::store');

$routes->get('/customer', 'CustomerController::index');
$routes->post('/tambah-customer', 'CustomerController::store');
$routes->delete('/hapus-customer/(:num)', 'CustomerController::delete/$1');
$routes->post('/edit-customer/(:num)', 'CustomerController::update/$1');

$routes->get('/teknisi', 'TeknisiController::index');
$routes->post('/tambah-teknisi', 'TeknisiController::store');
$routes->delete('/hapus-teknisi/(:num)', 'TeknisiController::delete/$1');
$routes->post('/edit-teknisi/(:num)', 'TeknisiController::update/$1');

$routes->get('/pengecekan', 'PengecekanController::index');
$routes->get('/tambah-pengecekan', 'PengecekanController::create');
$routes->post('/tambah-pengecekan', 'PengecekanController::store');
$routes->get('/tambah-barang-pengecekan/(:num)', 'PengecekanController::tambahbarang/$1');
$routes->post('/tambah-barang-pengecekan', 'PengecekanController::store_tambah_barang');
$routes->get('/edit-pengecekan', 'PengecekanController::edit');
$routes->delete('/hapus-barang-pengecekan/(:num)', 'PengecekanController::delete_barang_cek/$1');
// $routes->get('/detail-pengecekan/(:num)', 'PengecekanController::show/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
