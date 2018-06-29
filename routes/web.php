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

Route::get('/', function () {
    return view('welcome');
});
Route::get('info','InfoController@index')->name('info.index');
Route::get('info/create','InfoController@create')->name('info.create')->middleware('auth');
Route::post('info','InfoController@store')->name('info.store')->middleware('auth');
Route::get('info/show/{id}','InfoController@show')->name('info.show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
