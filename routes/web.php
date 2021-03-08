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

Route::get('/ktm', function () {
    return view('welcome');
});
// Route::get('/hello', function () {
//     return view('firstpage');
// });

Route::get('/world', function () {
    return view('secondpage');
});

Route::get('/hello','App\Http\Controllers\myController@index');
// to show addproduct form
route::get('/addproduct','App\Http\Controllers\myController@showproductform');
//to insert a product
Route::post('storeproduct','App\Http\Controllers\myController@store')->name('storeproduct');