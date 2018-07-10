<?php

Route::get('/', function(){return view('cover');});

Route::get('/Login','LoginController@index')->name('Logueo');

Route::get('/inicio','UserController@index');
Route::get('/registro','UserController@show')->name('registro');

Route::get('/crear-registro','UserController@create');
Route::post('/crear','UserController@store');

Route::get('/detalle-usuario/{user}','UserController@detail')->name('detalle');

Route::get('/detalle-usuario/{user}/editar','UserController@edit')->name('modificar');
Route::put('/detalle-usuario/{user}','UserController@modified')->name('editar');

Route::delete('/detalle-usuario/{user}','UserController@destroy')->name('borrar');



