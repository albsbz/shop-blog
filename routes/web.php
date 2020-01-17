<?php
use Illuminate\Http\Request; 
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


Route::get('/','MainController@index')->name('home');


Route::resource('/product','ProductsController', ['only' => ['index', 'show']]);


Route::resource('/category', 'CategoryController', ['only' => ['show']]);

Auth::routes();


	
	Route::group([
		'prefix'=>'admin2', 
		'namespace'=>'Adminer', 
		'middleware'=>'role:admin', //регистрация посредника в app\http\kernel , admin- переменная передается в посредник
		], 
		function(){ //group of controllers
			Route::get('/','AdminController@index');
			Route::resource('/users','UserController');
			Route::get('/allusers', 'UserController@userData')->name('allusers');

			Route::resource('/categories','CategoryController');
			Route::get('/allcategories', 'CategoryController@categoryData')->name('allcategories');

			Route::resource('/products','ProductController');
			Route::get('/allproducts', 'ProductController@productData')->name('allproducts');

			Route::resource('/orders','OrderController');
			Route::get('/allorders', 'OrderController@orderData')->name('allorders');

			Route::resource('/articles','ArticleController');
			Route::get('/allarticles', 'ArticleController@articleData')->name('allarticles');

			Route::resource('/reviews','ReviewController');
			Route::get('/allreviews', 'ReviewController@reviewData')->name('allreviews');

			Route::get('/settings','ContactController@index');
			Route::post('/settings/update','ContactController@update')->name('contacts.update');

			Route::get('/products-export', 'ProductController@export');
			Route::post('/products-import', 'ProductController@import');


		}
	);





Route::get('/cart','CartController@index');
Route::post('/add','CartController@store')->name('formSubmit');
Route::post('/n','CartController@changeqtt');
Route::post('/da','CartController@destroyall');
Route::resource('/checkout', 'OrderController');

Route::post('/changeqtt', 'CartController@changeqtt');
Route::post('/do','CartController@destroyone');
Route::post('/order','OrderController@store');


Route::get('/search', 'ProductsController@search');
Route::post('/clearFilter', 'ProductsController@clearFilter');
Route::post('/payment-status','PaymentController@status');

 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Route::post('/review', 'ReviewController@save');
Route::resource('/article', 'ArticleController');
Route::get('/myorders', 'OrderController@userOrders');
Route::resource('/article-category', 'ArticleCategoryController');
Route::get('/contacts', 'ContactController@index');
Route::post('/feedback','FeedbackController@index');