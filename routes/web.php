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
	Route::get('/','FrontentController@index');
	Route::get('list','FrontentController@list');
	Route::get('products','FrontentController@products');
	Route::get('details','FrontentController@details');
	Route::get('checkout','FrontentController@checkout');
	Route::get('cart','FrontentController@cart');
	Route::get('thankyou','FrontentController@thankyou');

});


// Admin by Tudm
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
	Route::get('/',function(){
		return view('admin.index');
	});

	Route::resource('categories','CategoryController');
	Route::resource('trademarks','TradeMarkController');
	Route::resource('products','ProductController');
	Route::resource('customers','CustomerController');
	Route::resource('admins','AdminController');
	Route::resource('feedbacks','FeedBackController');
	Route::resource('orders','OrderController');

});

Route::get('/login', 'HomeController@index')->name('login');
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Auth::routes();


