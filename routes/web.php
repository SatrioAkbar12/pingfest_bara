<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route untuk front
Route::get('/', 'FrontController@index');
Route::get('/it-venture', 'FrontController@itv');
Route::get('/seminar', 'FrontController@semnas');

//Route login dan register
Route::get('/it-venture/register', 'LoginRegisterController@register');
Route::post('/it-venture/register/simpan_akun', 'LoginRegisterController@simpan_akun');
Route::get('/it-venture/login', 'LoginRegisterController@login');
Route::post('/it-venture/login/cek_akun', 'LoginRegisterController@cek_akun');
Route::get('/it-venture/pendaftaran', 'LoginRegisterController@pendaftaran');

//Route dashboard member
Route::get('/member', 'AkunController@dashboard');
Route::get('/member/checkout', 'AkunController@checkout');
Route::get('/member/lomba', 'AkunController@lomba');

//Route seminar
Route::get('/seminar/register', 'SeminarController@register');
Route::post('/seminar/simpan_data', 'SeminarController@simpan_data');
// Route::get('/seminar/detail', 'SeminarController@detail');



//////////////////////////////////////////Route AUTH////////////////////////////////////////////////////////
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/login', 'Auth\LoginController@showLoginController')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
// Route::post('/password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
// Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// route::post('/register', 'Auth\RegisterController@register');
