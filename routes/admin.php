<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\escritorController;
use App\Http\Controllers\Admin\lectorController;
use App\Http\Controllers\Admin\libroController;
use App\Http\Controllers\Admin\generoController;


Route::get('',[HomeController::class,'index'])->middleware('can:admin.index')->name('admin.index');
Route::resource('users',UserController::class)->middleware('can:admin.users')->names('admin.users');
Route::resource('escritores',escritorController::class)->middleware('can:admin.escritores')->names('admin.escritores');
Route::resource('lectores',lectorController::class)->middleware('can:admin.lectores')->names('admin.lectores');
Route::resource('libros',libroController::class)->middleware('can:admin.libros')->names('admin.libros');
Route::resource('generos',generoController::class)->middleware('can:admin.generos')->names('admin.generos');
