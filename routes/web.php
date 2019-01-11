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

Route::get('/pepita', function () {
    return view('resguardos.pepita');
});

Route::get('/', 'AnimalController@index');
Route::get('/animal/{id}', 'AnimalController@view');
