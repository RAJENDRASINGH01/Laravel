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
// to showdata
Route::get('/showproduct','App\Http\Controllers\myController@show')->name('showproduct');
//to show data in homepage
Route::get('/homepage','App\Http\Controllers\myController@homepage')->name('homepage');
Route::get('/deletedata/{id}','App\Http\Controllers\myController@destroy')->name('delete');
//to edit product
Route::get('/editdata/{id}','App\Http\Controllers\myController@edit')->name('editproduct');