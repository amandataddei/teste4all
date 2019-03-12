<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'EventoController@index'); 

Route::get('/eventos',['uses'=>'EventoController@index']);

Route::post('/eventos/salvar',['uses'=>'EventoController@salvar']);

Route::get('/eventos/editar/{id}',['uses'=>'EventoController@editar']);

Route::get('/eventos/atualizar/{id}',['uses'=>'EventoController@atualizar']);




