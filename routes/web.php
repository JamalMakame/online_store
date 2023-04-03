<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// using group controllers
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/about', 'about')->name('home.about');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/{id}', 'show')->name('products.show');
});

Route::controller(AdminHomeController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin.home.index');
    // Route::get('/admin/about', 'about')->name('admin.about');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(AdminProductController::class)->group(function () {
        Route::get('/admin/product', 'index')->name('admin.product.index');
        Route::post('/admin/product/store', 'store')->name('admin.product.store');
        Route::delete('/admin/product/{id}/delete', 'delete')->name('admin.product.delete');
        Route::get('/admin/product/{id}/edit', 'edit')->name('admin.product.edit');
        Route::put('/admin/product/{id}/update', 'update')->name('admin.product.update');
    });

    Route::controller(MyAccountController::class)->group(function () {
        Route::get('/myaccount/orders', 'orders')->name('myaccount.orders');
    });
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart.index');
    Route::delete('/cart/delete', 'delete')->name('cart.delete');
    Route::post('/cart/add/{id}', 'add')->name('cart.add');

    Route::middleware(['auth'])->group(function () {
        Route::get('/cart/purchase', 'purchase')->name('cart.purchase');
    });
});


Auth::routes();
