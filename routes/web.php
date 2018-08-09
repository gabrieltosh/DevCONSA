<?php


Route::get('login/logout','controllerLogin@logout')->name('logout');
Route::post('login/log','controllerLogin@log')->name('log');

Route::post('panel/consumos/{proyecto_id}/{usuario_id}/{tanque_id}','controllerConsumo@consumoSave')->name('consumoSave');
Route::post('panel/consumos/buscar','controllerConsumo@buscar')->name('consumoBuscar');
Route::get('panel/consumos','controllerConsumo@proyectos')->name('consumoProyectos');
Route::get('panel/consumos/proyecto/{proyecto}','controllerConsumo@consumo')->name('consumo');

Route::delete('panel/asignaciones/{asignacion}/{proyecto}','controllerAsignacion@asigDelete')->name('asigDelete');
Route::get('panel/asignaciones/{proyecto}/{user}','controllerAsignacion@asigUsuario')->name('asigUser');
Route::get('panel/asignaciones/{id}','controllerAsignacion@personal')->name('asigPersonal');
Route::get('panel/asignaciones','controllerAsignacion@index')->name('asignaciones');
Route::post('panel/asignaciones/buscar','controllerAsignacion@buscar')->name('asigBuscar');

Route::get('panel/contenedores/pdf','controllerTanque@pdf')->name('tanquepdf');
Route::resource('panel/contenedores','controllerTanque');

Route::get('panel/proyectos/pdf','controllerProyectos@pdf')->name('proyectopdf');
Route::resource('panel/proyectos','controllerProyectos');

Route::get('panel/combustibles/pdf','controllerCombustible@pdf')->name('combustiblepdf');
Route::resource('panel/combustibles','controllerCombustible');

Route::get('panel/maquinarias/pdf','controllerMaquinaria@pdf')->name('maquinariapdf');
Route::resource('panel/maquinarias','controllerMaquinaria');

Route::get('panel/gerentes/pdf','controllerGerentes@pdf')->name('gerentepdf');
Route::resource('panel/gerentes','controllerGerentes');

Route::get('panel/empleados/pdf','controllerEmpleados@pdf')->name('empleadopdf');
Route::resource('panel/empleados','controllerEmpleados');

Route::get('panel/administradores/pdf','controllerAdministradores@pdf')->name('adminpdf');
Route::resource('panel/administradores','controllerAdministradores');
Route::get('panel','controllerPanel@inicio')->name('panel');



Route::get('/','controllerPagina@inicio')->name('inicio');
