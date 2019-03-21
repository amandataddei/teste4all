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

Route::get('/eventos/visualizar/{evento_id}',['uses'=>'DetalheEventoController@visualizar']);

Route::get('/eventos/editar/{evento_id}',['uses'=>'DetalheEventoController@editar']);


 

