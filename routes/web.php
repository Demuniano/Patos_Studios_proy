<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;

Route::get('/', function () {
    return view('/home/home');
});
Route::get('/shop', function () {
    return view('/shoplist/index');
});

Route::get('/rols',[RolController::class,'index'])->name('rols.index');
Route::post('/rols',[RolController::class,'store'])->name('rols.store');
Route::delete('/rols/{id}',[RolController::class,'destroy'])->name('rols.destroy');
Route::put('/rols/{id}',[RolController::class,'update'])->name('rols.update');
Route::get('/rols_edit/{id}',[RolController::class,'edit'])->name('rols.edit');
