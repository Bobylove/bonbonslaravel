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

Route::get('/', 'BonbonController@getIndex');

Route::post('/welcome', 'BonbonController@getValue');

Route::post('/welcome/sell/{id}' ,	'BonbonController@postSell');

Route::post('/welcome/restock/{id}', 'BonbonController@postRestock');

Route::post('/welcome/delete/{id}', 'BonbonController@postDelete');