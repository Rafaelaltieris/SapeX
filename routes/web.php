<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/agendas', 'AgendaTelefonicaController@index')->name('agendas.index');
Route::post('/agendas/store', 'AgendaTelefonicaController@store');
Route::get('/agendas/create', 'AgendaTelefonicaController@create');
Route::get('/agendas/{id}/edit', 'AgendaTelefonicaController@edit');
Route::post('/agendas/{id}', 'AgendaTelefonicaController@update');
Route::delete('/agendas/{id}', 'AgendaTelefonicaController@destroy');
