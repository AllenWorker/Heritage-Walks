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
| First Route helps display the home page
| Second route displays all of the stops related views
| third route displays all of the trails related views
| Auth shows whether the user is login or not
| stops and trails has -> middleware('auth') to stop unauthorised users from accessing the pages
*/


Route::get('/', 'PagesController@index' );
Route::resource('stops', 'StopsController')->middleware('auth');
Route::resource('trails', 'TrailsController')->middleware('auth');
Auth::routes(['register' => false]);



