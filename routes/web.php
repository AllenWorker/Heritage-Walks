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

Route::get('/', 'PagesController@index' );




Route::resource('stops', 'StopsController')->middleware('auth');
Route::resource('trails', 'TrailsController')->middleware('auth');


Auth::routes(['register' => false]);


Route::resource('stops', 'StopsController');
Route::resource('trails', 'TrailsController');


