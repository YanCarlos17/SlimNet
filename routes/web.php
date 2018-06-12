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
    return view('cover');
});
Route::get('/inicio','UserController@index');
//Route::get('/nuevo-registro','UserController@create');
Route::get('/nuevo-registro','UserController@show');
Route::get('/detalle-usuario/{id}','UserController@detail');
