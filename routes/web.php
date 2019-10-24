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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes', 'ClienteController@index')->name('clientes.index');
Route::get('/clientes/novo', 'ClienteController@create')->name('clientes.create');
Route::post('/clientes', 'ClienteController@store')->name('clientes.store');
Route::get('/clientes/show/{id}', 'ClienteController@show')->name('clientes.show');
Route::get('/clientes/edit/{id}', 'ClienteController@edit')->name('clientes.edit');
Route::post('/clientes/update/{id}', 'ClienteController@update')->name('clientes.update');
Route::get('/clientes/destroy/{id}', 'ClienteController@destroy')->name('clientes.destroy');
