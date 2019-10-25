<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('stops', 'StopsController@apiAll');
Route::get('stops/{id}', 'StopsController@apiOne');

Route::get('trails', 'TrailsController@apiAll');
Route::get('trails/{id}', 'TrailsController@apiOne');
Route::get('trailstops/{id}', 'TrailsController@apiStops');

