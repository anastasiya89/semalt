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

Route::get('page', 'indexController@index');
Route::get('page3', 'indexController@index3');
Route::get('page4', 'indexController@index4');
Route::get('page6', 'indexController@index6');
Route::get('page7', 'indexController@index7');
Route::get('page9', 'indexController@index9');
Route::get('page10', 'indexController@index10');