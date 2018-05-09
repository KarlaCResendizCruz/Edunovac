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

Route::get('/', function(){
    return view('index.welcome');
});

Route::get('/nuestras-apps', function(){
    return view('index.apps');
});

Route::get('/programa-educativo', function(){
    return view('index.programa');
});