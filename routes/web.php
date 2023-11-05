<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[OrdersController::class,'index'])->name('orders.index');
Route::post('/orders',[OrdersController::class,'store'])->name('orders.store');
Route::delete('/orders/{id}',[OrdersController::class,'destroy'])->name('orders.destroy');
Route::put('/orders/{id}',[OrdersController::class,'update'])->name('orders.update');
Route::get('/orders_edit/{id}',[OrdersController::class,'edit'])->name('orders.edit');