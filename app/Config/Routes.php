<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'User::registrasi');
$routes->post('/register', 'User::registrasi');

$routes->get('/login', 'User::login');
$routes->post('/login', 'User::login');

$routes->get('/dashboard-admin', 'User::dashboardAdmin', ['filter' => 'otentifikasi']);

$routes->get('/data-user', 'User::dataUser');
$routes->get('/edit-user/(:segment)', 'User::edit/$1');
$routes->delete('/user/(:num)', 'User::delete/$1');

$routes->get('/profile', 'User::profile');

$routes->get('/data-kategori', 'Kategori::dataKategori');
$routes->get('/tambah-kategori', 'Kategori::tambahKategori');
$routes->post('/simpan-kategori', 'Kategori::simpanKategori');
$routes->get('/hapus-kategori/(:num)', 'Kategori::hapusKategori/$1');
$routes->get('/edit-kategori/(:num)', 'Kategori::editKategori/$');
$routes->post('/perbarui-kategori/(:num)', 'Kategori::simpanEditKategori/$');

$routes->get('/data-satuan', 'Satuan::dataSatuan');
$routes->get('/tambah-satuan', 'Satuan::tambahSatuan');
$routes->post('/simpan-satuan', 'Satuan::simpanSatuan');

$routes->get('/data-produk', 'Produk::dataProduk');
$routes->get('/tambah-produk', 'Produk::tambahProduk');
$routes->post('/simpan-produk', 'Produk::simpanProduk');
$routes->get('/form-transaksi', 'Penjualan::formPenjualan');
$routes->get('/tambah-produk', 'Produk::tambahProduk');
$routes->post('/simpan-produk', 'Produk::simpanProduk');

