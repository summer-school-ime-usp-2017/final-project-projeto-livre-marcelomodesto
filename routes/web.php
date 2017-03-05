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

Route::get('/', function () {
    return view('welcome');
});

# ROTAS PARA EVENTOS
Route::get('/eventos', 'EventoController@index');
Route::get('/eventos/view/{evento}', 'EventoController@show');
Route::get('/eventos/edit/{evento}', 'EventoController@edit');
Route::get('/eventos/create', 'EventoController@create');
Route::post('/eventos/store', 'EventoController@store');
Route::post('/eventos/update/{id}', 'EventoController@update');



# ROTAS PARA PARTIPANTES
Route::get('/participantes', 'ParticipanteController@index');
Route::get('/participantes/view/{evento}', 'ParticipanteController@show');
Route::get('/participantes/edit/{evento}', 'ParticipanteController@edit');
Route::get('/participantes/create', 'ParticipanteController@create');
Route::post('/participantes/store', 'ParticipanteController@store');
Route::post('/participantes/update/{id}', 'ParticipanteController@update');
