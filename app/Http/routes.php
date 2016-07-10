<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
Route::get('/product/add', 'ProductsController@newProductForm');
Route::post('/product/add', 'ProductsController@newProduct');
Route::get('/search', 'ProductsController@searchProductForm');
Route::get('/search/results', 'ProductsController@search');
