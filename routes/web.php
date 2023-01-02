<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index')->name('index');

// Fabricantes
Route::get('/fabricantes', 'ManufacturerController@index')->name('fabricantes.index');
Route::get('/fabricantes/{name}/', 'ManufacturerController@show')->name('fabricantes.show');

// Products
Route::get('/productos', 'SupplyController@index')->name('products.index');

// Search
Route::get('/search', 'IndexController@search')->name('index.search');

// Contact
Route::get('/contacto', 'IndexController@contact')->name('index.contacto');

// About
Route::get('/about', 'IndexController@about')->name('index.about');

// Send Mail
Route::post('/sendmail', 'MessageController@send')->name('sendmail.send');
Route::post('sendmail/part-number', 'MessageController@sendPartNumber')->name('sendmail.partnumber.send');

Route::get('f/{manufacturer}/p/{number}/', 'SupplyController@show')->name('products.show');
Route::get('/generate-sitemap', 'IndexController@sitemap');