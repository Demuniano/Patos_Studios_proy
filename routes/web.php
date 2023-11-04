<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;

Route::get('/', function () {
    return view('/home/home');
});
Route::get('/shop', function () {
    return view('/shoplist/index');
});

Route::get('/roles',[RolController::class,'index'])->name('roles.index');
Route::post('/roles',[RolController::class,'store'])->name('roles.store');
Route::delete('/roles/{id}',[RolController::class,'destroy'])->name('roles.destroy');
Route::put('/roles/{id}',[RolController::class,'update'])->name('roles.update');
Route::get('/roles_edit/{id}',[RolController::class,'edit'])->name('roles.edit');
