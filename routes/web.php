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


Route::get('/eventos', 'EventoController@index');
Route::get('/evento/view/{evento}', 'EventoController@show');
Route::get('/evento/edit/{evento}', 'EventoController@edit');

Route::get('/eventos/create', 'EventoController@create');
Route::post('/eventos/create', 'EventoController@save');

Route::post('/eventos/update/{id}', 'EventoController@update');
