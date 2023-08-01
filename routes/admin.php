<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route ::get('', [HomeController::class, 'index'])->name('admin.home');

Route ::get('messages', [MessageController::class, 'index'])->name('messages.index');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('users', UserController::class)->names('admin.users');


// RECUERDA QUE LLEVA EL PREFIJO ADMIN
// la ruta manda llamar al controlador -HomeController
// hubicado en : App\Http\Controllers\Admin\HomeController
// que use su metodo -index

//    OJO - aqui el nombre real de la ruta es (admin.home), solo que admin
//    no aparece por que, se codifico en RoutreServiceProvide

// middleware('can:Ver dashboard') - SEGURIDAD - PERMISO


/////Route::get('',[HomeController::class,'index'])->middleware('can:Ver dashboard')->name('home');


// OJO - aqui el nombre real de la ruta es (admin.roles), solo que admin
// no aparece por que, se codifico en RoutreServiceProvide
// resource - genera las 7 rutas necesarias para hacer un CRUD COMPLETO
// la SEGURIDAD PERMISOS la manejo desde su controlador
/////Route::resource('roles',RoleController::class)->names('roles');
