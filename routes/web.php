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
	Route::get('/','HomeController@index');
	Route::get('list','HomeController@list');
	Route::get('product', 'HomeController@product');
});


// Admin by Tudm
Route::group(['prefix' => 'admin'], function () {
	Route::get('/',function(){
		return view('admin.index');
	});

	Route::resource('categories','CategoryController');
	Route::resource('trademarks','TradeMarkController');
	Route::resource('products','ProductController');
});
