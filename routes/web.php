<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\galeriController;
use App\Http\Controllers\FE\HomepageController;
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

Auth::routes();

Route::get('/', 'App\Http\Controllers\FE\DashboardController@index')->name('dashboard');
Route::get('/galeri', 'App\Http\Controllers\FE\GaleriConntroller@index')->name('galeri');
Route::get('/produk', 'App\Http\Controllers\FE\ProdukController@index')->name('produk');
Route::get('/custom-desain', 'App\Http\Controllers\FE\CustomDesainController@index')->name('custom-desain');
Route::get('/keranjang', 'App\Http\Controllers\FE\KeranjangController@index')->name('keranjang');
Route::get('/pembayaran', 'App\Http\Controllers\FE\PembayaranController@index')->name('pembayaran');


// Route::resource('/galeri', \App\Http\Controllers\admin\galeriController::class)
//     ->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/admin/galeri', 'App\Http\Controllers\admin\galeriController');
Route::resource('/admin/produk', 'App\Http\Controllers\admin\produkController');
Route::resource('admin/pesanan', 'App\Http\Controllers\admin\pesananController');

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('/', 'Admin\DahsboardController@index');
//     Route::resource('/admin/galeri', 'App\Http\Controllers\admin\galeriController');
//     Route::resource('/admin/produk', 'App\Http\Controllers\admin\produkController');
//     Route::resource('/pesanan', 'App\Http\Controllers\admin\pesananController');

// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
