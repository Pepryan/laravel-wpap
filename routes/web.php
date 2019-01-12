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
// Route::get('/fotogaleri', function () {
//     return view('fotogaleri');
// });
// Route::get('/testimoniuser', function () {
//     return view('testimoniuser');
// });


Route::resource('pesan', 'PesanController');
Route::get('/konfirmasi', 'PesanController@konfirmasi')->name('user.konfirmasi.index');
// Route::resource('konfirmasi', 'KonfirmasiController');
// Route::resource('testimoni', 'TestimoniController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home/carapesan', 'HomeController@carapesan')->name('home.carapesan');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/konfig', 'AdminController@konfig')->name('konfig');
    // Route::resource('/galeri', 'GaleriController');
    Route::resource('/pesanan', 'PesananController');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});