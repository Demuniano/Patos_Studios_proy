<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\DetailsController;

use App\Http\Controllers\ComentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoplistController;
use App\Http\Controllers\UserCommentController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UsersrepController;
use App\Http\Controllers\GraphsController;





Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/details',[DetailsController::class,'store'])->name('details.store');
 
    Route::post('/orders',[OrdersController::class,'store'])->name('orders.store');
    Route::get('/comentsUser/{id}', [UserCommentController::class,"show"])->name("comentsUser.show");
    Route::post('/comentsUser',[UserCommentController::class,'store'])->name('comentsUser.store');
    Route::get('/shoplist', [CartController::class, 'index'])->name('cart.index');
    
    Route::post('/add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('cart.remove');
    Route::put('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
    Route::get('/Userorders',[UserOrderController::class,'index'])->name('UserOrders.index');  
    Route::get('/Saleorders',[UserOrderController::class,'sale'])->name('orders.sale');
    
    Route::get('/orders/pdf',[OrdersController::class,'pdf'])->name('orders.pdf');
    Route::get('/Userorders/pdf/{id}',[UserOrderController::class,'pdf'])->name('UserOrders.pdf');

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

    Route::get('/coments', [ComentsController::class,"index"])->name("coments.index");
    Route::delete('/coments/{id}', [ComentsController::class,"destroy"])->name("coments.destroy");
    Route::get('/coments.edit/{id}', [ComentsController::class, 'edit'])->name('coments.edit');
    Route::post('/coments',[ComentsController::class,'store'])->name('coments.store');
    Route::put('/coments/{id}',[ComentsController::class,'update'])->name('coments.update');

    Route::get('/productexport',[ReportsController::class,'index'])->name('index');
    Route::get('/productexports',[ReportsController::class,'export'])->name('products.export');

    Route::get('/export',[UsersrepController::class,'index'])->name('usersrep');
    Route::get('/exports',[UsersrepController::class,'export'])->name('users.export');

    Route::get('/chart', [ProductsController::class,'showChart'])->name('products.charrt');

    Route::get('/orders_edit/{id}',[OrdersController::class,'edit'])->name('orders.edit');
    Route::delete('/orders/{id}',[OrdersController::class,'destroy'])->name('orders.destroy');
    Route::put('/orders/{id}',[OrdersController::class,'update'])->name('orders.update');

    Route::delete('/details/{id}',[DetailsController::class,'destroy'])->name('details.destroy');
    Route::put('/details/{id}',[DetailsController::class,'update'])->name('details.update');
    Route::get('/details_edit/{id}',[DetailsController::class,'edit'])->name('details.edit');
    Route::get('/details',[DetailsController::class,'index'])->name('details.index');

    Route::get('/orders',[OrdersController::class,'index'])->name('orders.index');
  
});

require __DIR__.'/auth.php';


Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');