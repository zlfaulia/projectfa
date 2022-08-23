<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\galeriController;
use App\Http\Controllers\FE\HomepageController;
use App\Http\Controllers\FE\KeranjangPesanController;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/test-dev', function(){
    return view('admin.layout.master');
});

Auth::routes();

Route::get('/', 'App\Http\Controllers\FE\DashboardController@index')->name('dashboard');
Route::get('/galeri', 'App\Http\Controllers\FE\GaleriController@index')->name('galeri');
Route::get('/produk', 'App\Http\Controllers\FE\ProdukController@index')->name('produk');
Route::get('/detailProduk/{id}', 'App\Http\Controllers\FE\detailProdukController@index')->name('detailProduk');
// Route::post('/detailProduk/{id}', 'App\Http\Controllers\FE\detailProdukController@store')->name('pesan');

Route::get('/customDesain', 'App\Http\Controllers\FE\CustomDesainController@index')->name('customDesain');
// Route::post('/tambah/customDesain', 'App\Http\Controllers\FE\CustomDesainController@create')->name('customDesain');
Route::get('/keranjang', 'App\Http\Controllers\FE\KeranjangController@index')->name('keranjang');
Route::get('pesan/{id}', 'App\Http\Controllers\FE\KeranjangPesanController@index')->name('pesan');
Route::get('/detailPesan/{id}', 'App\Http\Controllers\FE\DetailPesanController@index')->name('detailPesan');
// Route::get('/checkout/{id}', 'App\Http\Controllers\FE\KeranjangCheckOutController@index')->name('checkout');
// Route::get('pesan/', 'App\Http\Controllers\FE\KeranjangPesanController@index');
// Route::get('pesan/{id}', [KeranjangPesanController::class, 'index'])->name('pesan');
// Route::post('/pesan/{id}', 'App\Http\Controllers\FE\KeranjangPesanController@pesan')->name('pesan');
// Route::post('/keranjang', 'App\Http\Controllers\FE\detailProdukController@keranjang')->name('detailProduk');
Route::get('/pembayaran', 'App\Http\Controllers\FE\PembayaranController@index')->name('pembayaran');

// // menambahkan
// Route::post('/FE/customDesain', 'App\Http\Controllers\FE\CustomDesainController@store')->name('customDesain');

// Route::resource('/galeri', \App\Http\Controllers\admin\galeriController::class)
//     ->middleware('auth');
// route pemilik konveksi
Route::middleware('admin')->group(function(){
    Route::resource('/admin/galeri', 'App\Http\Controllers\admin\galeriController');
    Route::resource('/admin/produk', 'App\Http\Controllers\admin\produkController');
    Route::resource('/admin/stok', 'App\Http\Controllers\admin\stokController');
    Route::resource('admin/pesanan', 'App\Http\Controllers\admin\pesananController');
    Route::resource('admin/customDesain', 'App\Http\Controllers\admin\customDesainController');
    Route::resource('admin/pembayaran', 'App\Http\Controllers\admin\pembayaranController');
    Route::resource('admin/laporanModal', 'App\Http\Controllers\admin\laporanModalController');
    Route::resource('admin/user', 'App\Http\Controllers\admin\userController');
});

// Route::middleware('konsumen')->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });
// end penjual


// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('/', 'Admin\DahsboardController@index');
//     Route::resource('/admin/galeri', 'App\Http\Controllers\admin\galeriController');
//     Route::resource('/admin/produk', 'App\Http\Controllers\admin\produkController');
//     Route::resource('/pesanan', 'App\Http\Controllers\admin\pesananController');

// });
