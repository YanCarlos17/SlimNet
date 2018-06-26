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

Route::get('/', function(){return view('cover');});

Route::get('/inicio','UserController@index');
Route::get('/registro', ['as' => 'registro', 'uses' => 'UserController@show']);

Route::get('/crear-registro','UserController@create');
Route::post('/crear','UserController@store');

Route::get('/detalle-usuario/{user}/editar','UserController@edit');
Route::put('/detalle-usuario/{user}','UserController@modified');

Route::get('/detalle-usuario/{user}','UserController@detail')->name('detalle');

