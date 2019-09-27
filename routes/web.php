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

Route::view('/', 'home')->name('home');

route::get('/contacto','MessageController@index')->name('contacto');
Route::post('/contacto', 'MessageController@store');
Route::resource('/gastos', 'GastoController');
Route::resource('/ingresos', 'IngresoController');


Auth::routes();

