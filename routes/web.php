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

// Route::get('/hash', 'Api\AuthController@login');
Route::options('/{any}', function(){ return true; })->where('any', '.*');
Route::get('/{any}', 'AppController@index')->where('any', '^(?!api).*$');
