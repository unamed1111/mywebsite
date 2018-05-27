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
/*
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/product',function(){
	return view('frontend.show');
});

Route::get('/list',function(){
	return view('frontend.list');
});
*/
Route::group(['prefix' => 'frontend'], function () {
	Route::get('/','FrontentController@index')->name('index');
	Route::get('register','FrontentController@register')->name('cus.register');
	Route::get('login','FrontentController@login')->name('cus.login');
	
	Route::get('products/{id_category}/{id_trademark}/{value}/{price}/{energy}','FrontentController@products')->name('products');
	Route::get('list/{id}/{value}','FrontentController@list')->name('list');
	Route::get('search','FrontentController@search')->name('search');


	Route::get('details/{id}','FrontentController@details')->name('details');

	Route::get('cart','FrontentController@cart')->name('cart.index');
	Route::post('cart/store','FrontentController@cartstore')->name('cart.store');
	Route::delete('cart/{id}','FrontentController@cartdelete')->name('cart.delete');
	Route::post('cart/update','FrontentController@cartupdate')->name('cart.update');

	Route::post('checkout', 'FrontentController@checkout')->name('checkout');
	Route::get('thankyou','FrontentController@thankyou')->name('thankyou');
});


// Admin by Tudm
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
	Route::get('/','HomeController@dashboard')->name('dashboard');
	Route::resource('categories','CategoryController');
	Route::resource('trademarks','TradeMarkController');
	Route::resource('products','ProductController');
	Route::resource('customers','CustomerController');
	Route::resource('admins','AdminController');
	Route::resource('feedbacks','FeedBackController');
	Route::resource('orders','OrderController');
	Route::resource('events','EventController');
	Route::resource('supports','SupportController');
});
	Auth::routes();

