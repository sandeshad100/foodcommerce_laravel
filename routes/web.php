<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
});
Route::get('/about', function () {
    return view('user.about');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/category/add', function () {
    return view('admin.category_add');
})->name('category.add');
Route::get('/category', function () {
    return view('admin.category');
});

// category
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');

Route::get('/category', [CategoryController::class, 'show'])->name('category.show');

Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
//product
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

