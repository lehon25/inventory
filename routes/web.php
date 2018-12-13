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

Route::get('/', function () {
    return view('welcome');
});
//Master Barang
Route::get('/master-barang','MasterBarangController@index');
Route::post('/tambah-barang','MasterBarangController@store');
Route::get('/tambah-barang','MasterBarangController@create');
Route::get('/edit-barang/{id}','MasterBarangController@edit');
Route::post('/edit-barang','MasterBarangController@update');
Route::get('/hapus-barang/{id}','MasterBarangController@destroy');
Route::get('/show-barang/{id}','MasterBarangController@show');

//Kupon
Route::get('/kupon','KuponController@index');
Route::post('/tambah-kupon','KuponController@store');
Route::get('/tambah-kupon','KuponController@create');
Route::get('/edit-kupon/{id}','KuponController@edit');
Route::post('/update-kupon','KuponController@update');
Route::get('/hapus-kupon/{id}','KuponController@destroy');
Route::get('/show-kupon/{id}','KuponController@show');

//pemberlian
Route::get('/pembelian','PembelianController@index');
Route::post('/tambah-pembelian','PembelianController@store');
Route::get('/tambah-pembelian','PembelianController@create');
Route::get('/cancel/{id}','PembelianController@cancel');
