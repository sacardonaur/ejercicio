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

Route::get('/A765', 'HomeController@home')->name('startZone');
Route::get('/RegisterVehicle', 'RegisterVehicleController@index')->name('registerVehicleIndex');
Route::get('/ListVehicles', 'ListVehicleController@index')->name('listVehicles');
Route::get('/VehicleStatistics', 'VehicleStatisticsController@index')->name('vehicleStatistics');


Route::post('/RegisterVehicle', 'RegisterVehicleController@register')->name('registerVehicle');


