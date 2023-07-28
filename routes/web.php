<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/get', 'App\Http\Controllers\ProductsController@get'); // Get All Products
Route::get('/fetch/{products}', 'App\Http\Controllers\ProductsController@show'); // Get Single Products / or for Edit
Route::post('/create', 'App\Http\Controllers\ProductsController@create'); // Create Products 
Route::post('/update/{products}', 'App\Http\Controllers\ProductsController@update'); // Update
Route::delete('/delete/{products}', 'App\Http\Controllers\ProductsController@delete'); // Delete Product
