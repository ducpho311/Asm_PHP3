<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('')->name('client.')->group(function () {
    Route::get('', [ClientController::class, 'home'])->name('home');

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('list', [ClientController::class, 'productList'])->name('list');
        Route::get('productDetail/{id}', [ClientController::class, 'productDetail'])->name('productDetail');
    });

    Route::get('cart', [ClientController::class, 'cart'])->name('cart');
    Route::get('checkout', [ClientController::class, 'checkout'])->name('checkout');
    Route::get('contact', [ClientController::class, 'contact'])->name('contact');
    Route::get('/category/{id}', [ClientController::class, 'category'])->name('category');
 
});




Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('list', [ProductController::class, 'productList'])->name('list');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('create', [ProductController::class, 'productCreate'])->name('productCreate');
        Route::post('status/{product}&{status}', [ProductController::class, 'status'])->name('status');
        Route::delete('delete/{product}', [ProductController::class, 'delete'])->name('delete');
        Route::get('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::post('updateProduct/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
    });

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('list', [UserController::class, 'index'])->name('list');
        Route::post('role/{user}', [UserController::class, 'role'])->name('role');
        Route::post('status/{user}', [UserController::class, 'status'])->name('status');
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('list', [CategoryController::class, 'index'])->name('list');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('create', [CategoryController::class, 'categoryCreate'])->name('categoryCreate');
        Route::get('update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::post('updateCategory/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
        Route::delete('delete/{category}', [CategoryController::class, 'delete'])->name('delete');
    });

    Route::prefix('size')->name('size.')->group(function () {
        Route::get('list', [SizeController::class, 'index'])->name('list');
        Route::get('create', [SizeController::class, 'create'])->name('create');
        Route::post('create', [SizeController::class, 'sizeCreate'])->name('sizeCreate');
        Route::get('update/{id}', [SizeController::class, 'update'])->name('update');
        Route::post('updateSize/{id}', [SizeController::class, 'updateSize'])->name('updateSize');
        Route::delete('delete/{size}', [SizeController::class, 'delete'])->name('delete');
    });

    
});

Route::middleware('guest')->prefix('auth')->name('auth.')->group(function () {
    
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');

    Route::get('signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('signup', [AuthController::class, 'postSignup'])->name('postSignup');

    
});
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


