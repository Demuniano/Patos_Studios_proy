<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\DetailsController;

use App\Http\Controllers\ComentsController;
use App\Http\Controllers\UserCommentController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/details',[DetailsController::class,'index'])->name('details.index');
    Route::post('/details',[DetailsController::class,'store'])->name('details.store');
    Route::delete('/details/{id}',[DetailsController::class,'destroy'])->name('details.destroy');
    Route::put('/details/{id}',[DetailsController::class,'update'])->name('details.update');
    Route::get('/details_edit/{id}',[DetailsController::class,'edit'])->name('details.edit');

    Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

    Route::get('/orders',[OrdersController::class,'index'])->name('orders.index');
    Route::post('/orders',[OrdersController::class,'store'])->name('orders.store');
    Route::delete('/orders/{id}',[OrdersController::class,'destroy'])->name('orders.destroy');
    Route::put('/orders/{id}',[OrdersController::class,'update'])->name('orders.update');
    Route::get('/orders_edit/{id}',[OrdersController::class,'edit'])->name('orders.edit');

    Route::get('/comentsUser/{id}', [UserCommentController::class,"show"])->name("comentsUser.show");
    Route::post('/comentsUser',[UserCommentController::class,'store'])->name('comentsUser.store');
   


});
Route::middleware(['auth', 'role:admin'])->group(function () {
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
    Route::post('/products',[ProductsController::class,'store'])->name('products.store');    
    Route::put('/products/{id}',[ProductsController::class,'update'])->name('products.update');
    Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

    Route::get('/coments', [ComentsController::class,"index"])->name("coments.index");
    Route::delete('/coments/{id}', [ComentsController::class,"destroy"])->name("coments.destroy");
    Route::get('/coments.edit/{id}', [ComentsController::class, 'edit'])->name('coments.edit');
    Route::post('/coments',[ComentsController::class,'store'])->name('coments.store');
    Route::put('/coments/{id}',[ComentsController::class,'update'])->name('coments.update');
});

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('/home/home');
});
Route::get('/shop', function () {
    return view('/shoplist/index');
});

