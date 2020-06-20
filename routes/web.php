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

Auth::routes();

/* Localization */

Route::get('language/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return back();
})->name('change_language');


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


// Customer Routes //

Route::get('/' ,'customer\HomeController@index');       // the home page with filtering latest and newst products

Route::get('/products/{name}', 'ProductController@index'); // the home page with filtering by categories

Route::get('/product/{product}', 'ProductController@show'); // the home page with filtering by categories

Route::get('/about', function(){

    $categories = App\Category::all();

    return view('customer.about',compact('categories',$categories));

});// the about page

Route::GET('profile' ,'customer\CustomerController@index');

Route::PUT('profile/updateInfo' ,'customer\CustomerController@updateInfo');

Route::PUT('profile/updatePw' ,'customer\CustomerController@updatePw');

Route::view('/contact','customer.contact')->middleware('auth:customer');

Route::get('/wishlist', 'customer\WishlistController@index')->middleware('auth:customer');

Route::get('/shopping_cart', 'customer\OrderController@index')->middleware('auth:customer');

Route::post('/wishlist' ,'customer\WishlistController@store')->middleware("auth:customer");

Route::post('/myCart','customer\CartController@store')->middleware("auth:customer");

Route::post('/order','customer\OrderController@store')->middleware("auth:customer");

Route::post('/send_email','customer\EmailController@store');

Route::delete('/wishlist/{id}', 'customer\WishlistController@destroy');

Route::delete('/myCart/{id}', 'customer\CartController@destroy');

// Customer Routes //



/* Dashboard Routes*/
Route::prefix('dashboard')->name('dashboard.')->middleware('auth:admin')->group(function(){
    Route::view('', 'dashboard.index', [
        'orders' => App\Order::get(),
        'recent_orders' => App\Order::take(8)->latest()->get()  ,
        'products' => App\Product::get(),
        'customers' => App\Customer::get(),
    ])->name('index');
    Route::put('profile', 'Dashboard\ProfileController@updateProfilePicture')->name('profile.updateProfilePicture');
    Route::resources([
        'admins'      => 'Dashboard\AdminController',
        'categories'  => 'Dashboard\CategoryController',
        'products'    => 'Dashboard\ProductController',
        'customers'   => 'Dashboard\CustomerController',
        'orders'      => 'Dashboard\OrderController',
        'slides'      => 'Dashboard\SlideController',
        'profile'     => 'Dashboard\ProfileController',
        'governments' => 'Dashboard\GovernmentController',
        'cities'      => 'Dashboard\CityController',
        'countries'   => 'Dashboard\CountryController'
    ]);
});


