<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/create', 'ProductController@create');
Route::get('/', 'ProductController@index')->name('index');
Auth::routes();
Route::get('/home',  'HomeController@index')->name('home');
Route::get('/home/add',  'HomeController@formAdd')->name('product.add');
Route::post('/home', 'HomeController@storeProduct')->name('product.store');
Route::get('/home/{product}/edit','HomeController@formEdit')->name('product.edit')->middleware('can:update,product');
Route::patch('/home/{product}', 'HomeController@updateProduct')->name('product.update')->middleware('can:update,product');
Route::get('/home/{product}/delete','HomeController@formDelete')->name('product.delete')->middleware('can:destroy,product');
Route::delete('/home/{product}', 'HomeController@destroyProduct')->name('product.destroy')->middleware('can:destroy,product');
Route::get('/{product}', 'ProductController@detail')->name('detail');
