<?php


Route::get('login/logout','controllerLogin@logout')->name('logout');
Route::post('login/log','controllerLogin@log')->name('log');

Route::delete('panel/asignaciones/{asignacion}/{proyecto}','controllerAsignacion@asigDelete')->name('asigDelete');
Route::get('panel/asignaciones/{proyecto}/{user}','controllerAsignacion@asigUsuario')->name('asigUser');
Route::get('panel/asignaciones/{id}','controllerAsignacion@personal')->name('asigPersonal');
Route::get('panel/asignaciones','controllerAsignacion@index')->name('asignaciones');
Route::post('panel/asignaciones/buscar','controllerAsignacion@buscar')->name('asigBuscar');
Route::resource('panel/contenedores','controllerTanque');
Route::resource('panel/proyectos','controllerProyectos');
Route::resource('panel/combustibles','controllerCombustible');
Route::resource('panel/maquinarias','controllerMaquinaria');
Route::resource('panel/gerentes','controllerGerentes');
Route::resource('panel/empleados','controllerEmpleados');
Route::resource('panel/administradores','controllerAdministradores');
Route::get('panel','controllerPanel@inicio')->name('panel');



Route::get('/','controllerPagina@inicio')->name('inicio');
