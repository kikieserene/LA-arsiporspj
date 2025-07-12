<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// =============================
// Route Awal: Login Page
// =============================
$routes->get('/', 'Auth::login');

// =============================
// Route Auth
// =============================
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginPost');
$routes->get('/logout', 'Auth::logout');

// =============================
// Dashboard Role-based
// =============================
$routes->get('/dashboard', 'Dashboard::index');     // Admin
$routes->get('/pptk', 'Pptk::index');               // PPTK
$routes->get('/bendahara', 'Bendahara::index');     // Bendahara
$routes->get('/verifikator', 'Verifikator::index'); // Verifikator

// =============================
// Kelola User (Admin Only)
// =============================
$routes->group('user', function ($routes) {
    $routes->get('/', 'UserController::index');
    $routes->get('create', 'UserController::create');
    $routes->post('store', 'UserController::store');
    $routes->get('edit/(:num)', 'UserController::edit/$1');
    $routes->post('update/(:num)', 'UserController::update/$1');
    $routes->get('delete/(:num)', 'UserController::delete/$1');
});

// =============================
// Kelola SPJ
// =============================
$routes->group('spj', function ($routes) {
    $routes->get('/', 'SpjController::index');
    $routes->get('create', 'SpjController::create');
    $routes->post('store', 'SpjController::store');
    $routes->get('edit/(:num)', 'SpjController::edit/$1');
    $routes->post('update/(:num)', 'SpjController::update/$1');
    $routes->get('delete/(:num)', 'SpjController::delete/$1');
    $routes->get('print', 'SpjController::print');
});

// =============================
// Laporan SPJ
// =============================
$routes->get('/laporan', 'LaporanController::index');
$routes->post('/laporan/update-status/(:num)', 'LaporanController::updateStatus/$1');
$routes->get('/laporan-spj', 'LaporanController::pptkView');

// =============================
// Validasi SPJ oleh Bendahara
// =============================
$routes->group('bendahara', function ($routes) {
    $routes->get('validasi', 'Bendahara::validasi');
    $routes->post('validasi/update/(:num)', 'Bendahara::updateValidasi/$1');
});

// =============================
// Menu Verifikator
// =============================
$routes->group('verifikator', function ($routes) {
    $routes->get('/', 'Verifikator::index');                        // Dashboard
    $routes->get('cari-validasi', 'Verifikator::cariValidasi');    // Pencarian dokumen
    $routes->get('tambah-info/(:num)', 'Verifikator::formTambahInfo/$1'); // Form tambah informasi
    $routes->post('simpan-info', 'Verifikator::simpanInfo');       // Simpan data verifikasi
    // $routes->get('arsip-spj', 'Verifikator::arsipSpj');          // Arsip SPJ jika sudah dibuat
});

// =============================
// Arsip SPJ (Global jika diperlukan)

$routes->get('/arsip-spj', 'ArsipController::index'); // Akses umum untuk semua role

// =============================
// $routes->get('/arsip-spj', 'ArsipController::index');
