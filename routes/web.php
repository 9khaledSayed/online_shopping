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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'CustomerController@index');
Auth::routes();

/* multi auth routes */
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/customer', 'Auth\LoginController@showCustomerLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/customer', 'Auth\RegisterController@showCustomerRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/customer', 'Auth\LoginController@customerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/customer', 'Auth\RegisterController@createCustomer');
/* end multi auth routes */

Route::prefix('dashboard')->name('dashboard.')->middleware('auth:admin')->group(function () {
    Route::view('/', 'dashboard');
    Route::resources([
        'products' => 'Dashboard\ProductController',
    ]);
});


Route::view('/home', 'home')->middleware('auth');
Route::view('/customer', 'customer')->middleware('auth:customer');
