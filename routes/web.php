<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.home');
});
Route::get('/about', function () {
    return view('user.about');
});

Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/category', function () {
    return view('admin.category');
});

// category
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');

Route::get('/category', [CategoryController::class, 'show'])->name('category.show');



