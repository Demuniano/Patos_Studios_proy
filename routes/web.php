<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;use App\Http\Controllers\RolController;
use App\Http\Controllers\RolesController;

Route::get('/', function () {
    return view('/home/home');
});
Route::get('/shop', function () {
    return view('/shoplist/index');
});

Route::get('/roles',[RolesController::class,'index'])->name('roles.index');
Route::post('/roles',[RolesController::class,'store'])->name('roles.store');
Route::delete('/roles/{id}',[RolesController::class,'destroy'])->name('roles.destroy');
Route::put('/roles/{id}',[RolesController::class,'update'])->name('roles.update');
Route::get('/roles_edit/{id}',[RolesController::class,'edit'])->name('roles.edit');

Route::get('/users',[UsersController::class,'index'])->name('users.index');
Route::get('/users_edit/{id}',[UsersController::class,'edit'])->name('users.edit');
route::post('/users',[UsersController::class,'store'])->name('users.store');
Route::delete('/users/{id}',[UsersController::class,'destroy'])->name('users.destroy');
Route::put('/users/{id}',[UsersController::class,'update'])->name('users.update');