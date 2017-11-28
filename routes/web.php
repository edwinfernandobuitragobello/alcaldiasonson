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
Route::post('/import_excel','UserController@import_excel');

Route::get('/documentos','UserController@asignaciones');
Route::get('/documento','UserController@asignaciones_busqueda');
Route::post('/asignaciones_crear','UserController@asignaciones_crear');
Route::post('/asignaciones_editar','UserController@asignaciones_editar');
Route::get('/asignaciones_eliminar/{id?}','UserController@asignaciones_eliminar');

Route::get('/login','UserController@login');
Route::post('/logeo','UserController@logeo');
Route::get('/logeo_fin','UserController@logeo_fin');
Route::get('/documentos_usuarios','UserController@documentos_usuarios');
Route::get('/documentos_usuario','UserController@documentos_usuarios_busqueda');

Route::get('/solicitud','UserController@solicitud');
Route::post('/solicitud_cuenta','UserController@solicitud_cuenta');

Route::get('/index','IndexController@index');

Route::get('/admin_banners','IndexController@admin_banners');
Route::post('/banner_editar','IndexController@banner_editar');

Route::get('/admin_enlaces','IndexController@admin_enlaces');

