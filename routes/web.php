<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\DetailsController;


Route::get('/',[OrdersController::class,'index'])->name('orders.index');
Route::post('/orders',[OrdersController::class,'store'])->name('orders.store');
Route::delete('/orders/{id}',[OrdersController::class,'destroy'])->name('orders.destroy');
Route::put('/orders/{id}',[OrdersController::class,'update'])->name('orders.update');
Route::get('/orders_edit/{id}',[OrdersController::class,'edit'])->name('orders.edit');

Route::get('/',[OrdersController::class,'index'])->name('details.index');
Route::post('/orders',[OrdersController::class,'store'])->name('details.store');
Route::delete('/orders/{id}',[OrdersController::class,'destroy'])->name('details.destroy');
Route::put('/orders/{id}',[OrdersController::class,'update'])->name('details.update');
Route::get('/orders_edit/{id}',[OrdersController::class,'edit'])->name('details.edit');

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

Route::get('/products', [ProductsController::class,"index"])->name("products.index");
Route::delete('/products/{id}', [ProductsController::class,"destroy"])->name("products.destroy");
Route::get('/products.edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
route::post('/products',[ProductsController::class,'store'])->name('products.store');
route::put('/products/{id}',[ProductsController::class,'update'])->name('products.update');