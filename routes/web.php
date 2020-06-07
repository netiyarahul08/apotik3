<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'HomeController@index')
    ->name('home.index')
    ->middleware('auth');
Route::group(['middleware' => 'auth', 'prefix' => 'jenis'], function () {

    Route::get('/', 'JenisController@index')
        ->name('jenis.index');
    Route::get('/create', 'JenisController@create')
        ->name('jenis.create');
    Route::post('/store', 'JenisController@store')
        ->name('jenis.store');
    Route::get('/{id}', 'JenisController@find')
        ->name('jenis.find');
    Route::post('/{id}', 'JenisController@update')
        ->name('jenis.update');
    Route::get('/delete/{id}', 'JenisController@destroy')
        ->name('jenis.delete');

});

Route::group(['middleware' => 'auth', 'prefix' => 'supplier'], function () {

    Route::get('/', 'SupplierController@index')
        ->name('supplier.index');
    Route::get('/create', 'SupplierController@create')
        ->name('supplier.create');
    Route::post('/store', 'SupplierController@store')
        ->name('supplier.store');
    Route::get('/{id}', 'SupplierController@find')
        ->name('supplier.find');
    Route::post('/{id}', 'SupplierController@update')
        ->name('supplier.update');
    Route::get('/delete/{id}', 'SupplierController@destroy')
        ->name('supplier.delete');

});

Route::group(['middleware' => 'auth', 'prefix' => 'customer'], function () {

    Route::get('/', 'CustomerController@index')
        ->name('customer.index');
    Route::get('/create', 'CustomerController@create')
        ->name('customer.create');
    Route::post('/store', 'CustomerController@store')
        ->name('customer.store');
    Route::get('/{id}', 'CustomerController@find')
        ->name('customer.find');
    Route::post('/{id}', 'CustomerController@update')
        ->name('customer.update');
    Route::get('/delete/{id}', 'CustomerController@destroy')
        ->name('customer.delete');

});

Route::group(['middleware' => 'auth', 'prefix' => 'produk'], function () {

    Route::get('/', 'ProdukController@index')
        ->name('produk.index');
    Route::get('/create', 'ProdukController@create')
        ->name('produk.create');
    Route::post('/store', 'ProdukController@store')
        ->name('produk.store');
    Route::get('/{id}', 'ProdukController@find')
        ->name('produk.find');
    Route::post('/{id}', 'ProdukController@update')
        ->name('produk.update');
    Route::get('/delete/{id}', 'ProdukController@destroy')
        ->name('produk.delete');

});
Route::group(['middleware' => 'auth', 'prefix' => 'pembelian'], function () {

    Route::get('/', 'PembelianController@index')
        ->name('pembelian.index');
    Route::get('/create', 'PembelianController@create')
        ->name('pembelian.create');
    Route::post('/store', 'PembelianController@store')
        ->name('pembelian.store');
    Route::get('/{id}', 'PembelianController@find')
        ->name('pembelian.find');
    Route::post('/{id}', 'PembelianController@update')
        ->name('pembelian.update');
    Route::get('/delete/{id}', 'PembelianController@destroy')
        ->name('pembelian.delete');

});

Route::group(['middleware' => 'auth', 'prefix' => 'penjualan'], function () {

    Route::get('/', 'PenjualanController@index')
        ->name('penjualan.index');
    Route::get('/create', 'PenjualanController@create')
        ->name('penjualan.create');
    Route::post('/store', 'PenjualanController@store')
        ->name('penjualan.store');
    Route::get('/{id}', 'PenjualanController@find')
        ->name('penjualan.find');
    Route::post('/{id}', 'PenjualanController@update')
        ->name('penjualan.update');
    Route::get('/delete/{id}', 'PenjualanController@destroy')
        ->name('penjualan.delete');

});

Route::group(['middleware' => 'auth', 'prefix' => 'laporan'], function () {

    Route::get('/jenis', 'LaporanController@jenis')
        ->name('laporan-jenis.index');

    Route::get('/produk', 'LaporanController@produk')
        ->name('laporan-produk.index');

    Route::get('/customer', 'LaporanController@customer')
        ->name('laporan-customer.index');

    Route::get('/supplier', 'LaporanController@supplier')
        ->name('laporan-supplier.index');

    Route::get('/pembelian', 'LaporanController@pembelian')
        ->name('laporan-pembelian.index');

    Route::get('/penjualan', 'LaporanController@penjualan')
        ->name('laporan-penjualan.index');

});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')
        ->name('admin.index');
    Route::get('/create', 'AdminController@create')
        ->name('admin.create');
    Route::post('/store', 'AdminController@store')
        ->name('admin.store');
    Route::get('/{id}', 'AdminController@find')
        ->name('admin.find');
    Route::post('/{id}', 'AdminController@update')
        ->name('admin.update');
    Route::get('/delete/{id}', 'AdminController@destroy')
        ->name('admin.delete');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')
        ->name('admin.index');
    Route::get('/create', 'AdminController@create')
        ->name('admin.create');
    Route::post('/store', 'AdminController@store')
        ->name('admin.store');
    Route::get('/{id}', 'AdminController@find')
        ->name('admin.find');
    Route::post('/{id}', 'AdminController@update')
        ->name('admin.update');
    Route::get('/delete/{id}', 'AdminController@destroy')
        ->name('admin.delete');
});

Route::get('/', 'HomeController@index')
    ->name('home.index')
    ->middleware('auth');

Route::get('/login', 'AuthController@index')
    ->name('auth.index')
    ->middleware('guest');

Route::post('/login', 'AuthController@login')
    ->name('auth.login')
    ->middleware('guest');

Route::get('/logout', 'AuthController@logout')
    ->name('auth.logout')
    ->middleware('auth');

Route::get('notification', 'LaundryController@notification');
