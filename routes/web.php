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
    return view('home');
});

Route::get('home/btn', 'UserController@index');
Route::get('home/create','UserController@create');
Route::post('home/create','UserController@store')->name('home.create');
Route::get('home/show','UserController@show')->name('home.show');
Route::get('home/edit/{id}','UserController@edit')->name('home.edit');
Route::post('home/edit/{id}','UserController@update')->name('home.edit');
Route::get('home/show/{id}','UserController@destroy')->name('home.delete');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
