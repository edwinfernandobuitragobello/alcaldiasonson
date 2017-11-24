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

Route::get('/','UserController@usuarios');
Route::get('/usuarios','UserController@usuarios_busqueda');
Route::post('/usuarios_crear','UserController@usuarios_crear');
Route::post('/usuarios_editar','UserController@usuarios_editar');
Route::get('/usuarios_eliminar/{id?}','UserController@usuarios_eliminar');

Route::get('/asignacion','UserController@asignaciones');
Route::get('/asignaciones','UserController@asignaciones_busqueda');
Route::post('/asignaciones_crear','UserController@asignaciones_crear');
Route::post('/asignaciones_editar','UserController@asignaciones_editar');
Route::get('/asignaciones_eliminar/{id?}','UserController@asignaciones_eliminar');