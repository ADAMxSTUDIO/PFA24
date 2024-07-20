<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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

// Product routes
Route::get('/', [ProductController::class, 'index']);
Route::get('/{product_id}', [ProductController::class, 'showProduct'])->name('product.show')->where('product_id', '\d+');
Route::post('/{product_id}', [OrderController::class, 'storeOrder'])->where('product_id', '\d+')->middleware('auth')->name('order.store');

// Auth routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('registerForm');
Route::post('/register', [AuthController::class, 'Register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'Login'])->name('login');
Route::get('/logout', [AuthController::class, 'Logout'])->name('logout');

// Admin routes
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    // Admin.product routes
    Route::get('/product/create', [AdminController::class, 'createProduct'])->name('admin.product.create');
    Route::post('/product', [AdminController::class, 'storeProduct'])->name('admin.product.store');
    Route::get('/product/{product_id}/edit', [AdminController::class, 'editProduct'])->name('admin.product.edit');
    Route::put('/product/{product_id}', [AdminController::class, 'updateProduct'])->name('admin.product.update');
    Route::get('/product/{product_id}', [AdminController::class, 'destroyProduct'])->name('admin.product.destroy');

    // Admin.category routes
    Route::get('/category/create', [AdminController::class, 'createCategory'])->name('admin.category.create');
    Route::post('/category', [AdminController::class, 'storeCategory'])->name('admin.category.store');
    Route::get('/category/{category_id}/edit', [AdminController::class, 'editCategory'])->name('admin.category.edit');
    Route::put('/category/{category_id}', [AdminController::class, 'updateCategory'])->name('admin.category.update');
    Route::get('/category/{category_id}', [AdminController::class, 'destroyCategory'])->name('admin.category.destroy');

});
