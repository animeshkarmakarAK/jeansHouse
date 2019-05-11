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



Route::get('/',function(){
	return view('jeanser.home');
});
 
 Route::post('/show','basicController@show');
	/*Route::get('index','basicController@index');
	Route::get('about','basicController@about');
	Route::get('app','basicController@appBlade');
	Route::get('contact','basicController@contact');*/

    Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'homeController@register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('upload','basicController@upload')->name('upload');
Route::post('upload','basicController@store');


Route::get('/jhome','jeanserController@jeanserHome')->name('home');
Route::get('/add product','jeanserController@addProduct')->name('addproduct');

Route::post('/add product','jeanserController@addedProduct');

Route::get('/mens-product','jeanserController@mensProduct')->name('mens-product');
Route::post('/image_store','jeanserController@store');


Route::get('/womens-product','jeanserController@womensProduct')->name('womens-product');
Route::get('/boys-product','jeanserController@boysProduct')->name('boys-product');
Route::get('/girls-product','jeanserController@girlsProduct')->name('girls-product');
Route::get('/babies-product','jeanserController@babiesProduct')->name('babies-product');

Route::get('/adminHome','jeanserController@adminHome')->name('admin');

Route::get('/admin','jeanserController@adminLogin');

Route::post('/adminLogging','jeanserController@adminLogging');
Route::get('/productDetail','jeanserController@productDetail');
Route::get('/productDetail/{product_id}','jeanserController@productDetail')->name('productDetail');

Route::post('/LoadMore','jeanserController@LoadMore');

Route::post('/LoadMore/{last_product_id}','jeanserController@LoadMore_again');

Route::get('shopping-cart','cartController@shoppingCart');
Route::get('/cart/{id}','cartController@cart');
Route::post('/cart/{id}','cartController@cart');
Route::get('/checkout','cartController@checkout');
Route::post('/login-checkout','cartController@loginCheckout');
Route::get('/adminRegister','jeanserController@adminRegister');
route::post('/adminRegister','jeanserController@adminRegistering');
Route::get('/customizeProduct','jeanserController@customizeProduct');
Route::get('/customizeProduct/{$category}','jeanserController@customProduct');

Route::get('/shop','shopController@index');
Route::get('/jeansHouseShop','shopController@index');
Route::get('/removeFromCart/{product_id}','cartController@removeFromCart');

Route::get('reviewProduct','reviewController@index')->name('review');
Route::post('review','reviewController@review');



//Route::get('/register','RegistrationController@create');
Route::get('/userRegister','authController@register');
Route::get('/userLogin','authController@login');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//songscontroller -- outside work not related this project 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//** making adming with template **//

Route::get('/admin/admin','adminController@index');
Route::get('/admin/login','adminController@login');
Route::get('/admin/register','adminController@register');
Route::get('/admin/forgot-password','adminController@forgotPassword');
Route::get('/admin/charts','adminController@charts');
Route::get('/admin/blank','adminController@blank');
Route::get('/admin/404','adminController@fourzerofour');
Route::get('/admin/customproduct','adminController@customproduct');