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


Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function (){
    Route::resource('talla_m','TallaMasculinoController');
    Route::resource('talla_f','TallaFemeninoController');
    Route::resource('peso_m','PesoMasculinoController');
    Route::resource('peso_f','PesoFemeninoController');
    Route::resource('imc_m','IMCFemeninoController');
    Route::resource('imc_f','IMCMasculinoController');
    Route::resource('perimetrob_m','PerimetroBrazoMController');
    Route::resource('perimetrob_f','PerimetroBrazoFController');
    Route::resource('amb_m','AMBFemeninoController');
    Route::resource('amb_f','AMBMasculinoController');
});
