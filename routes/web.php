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

Route::get('/animales', 'AnimalController@index');

Route::get('/', function(){
    return view('home');
});

Route::get('/acceso', function(){
    if (\Illuminate\Support\Facades\Auth::check())
        return view('indexAdmin');
    else
        return view('acceso');
});

Route::get('/administrar', function(){
    if (\Illuminate\Support\Facades\Auth::check())
        return view('indexAdmin');
    else
        return view('acceso');
});

Route::get('/quienes-somos', function(){
    return view('quienes-somos');
});

Route::get('/home', function(){
   return redirect('/');
});

Route::get('/ayudanos', function(){
    return view('ayudanos');
});

Route::get('/salir', function(){
   if (\Illuminate\Support\Facades\Auth::check()){
    \Illuminate\Support\Facades\Auth::logout();
   }
   return redirect('/');
});

Auth::routes();

Route::get('/animal/{id}', 'AnimalController@view');
