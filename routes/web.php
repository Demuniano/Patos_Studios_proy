<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('/home/home');
});
Route::get('/shop', function () {
    return view('/shoplist/index');
});
Route::get('/products', [ProductsController::class,"index"])->name("products.index");
Route::delete('/products/{id}', [ProductsController::class,"destroy"])->name("products.destroy");
Route::get('/products.edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
route::post('/products',[ProductsController::class,'store'])->name('products.store');
route::put('/products/{id}',[ProductsController::class,'update'])->name('products.update');