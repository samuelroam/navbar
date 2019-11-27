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
})->name('welcome');

Route::get('/empleados', 'EmpleadosController@empleados');

Route::get('/empleados/{id}', 'EmpleadosController@show');



Route::resource('proyectos','ProyectoController');

Route::get('/proyectos','ProyectoController@index');

Route::get('/proyectos/create','ProyectoController@create');

Route::post('/proyectos','ProyectoController@store');

Route::get('/proyectos/{proyecto}','ProyectoController@show');

Route::get('/proyectos/{proyecto}/edit','ProyectoController@edit');

Route::put('/proyectos/{proyecto}','ProyectoController@update');

Route::delete('/proyectos/{proyecto}','ProyectoController@destroy');