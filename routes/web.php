<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('about', function () {
    return view('user.about');
});
Route::get('guest', function () {
    return view('user.guest');
});
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware('auth')->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('is_admin:admin')->name('dashboard');


Route::middleware(['auth', 'is_admin:admin'])->group(
    function () {
        // category
        Route::get('/category/add', function () {
            return view('admin.category_add');
        })->name('category.add');
        // Route::get('/category', function () {
        //     return view('admin.category');
        // });

        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        //product

        Route::get('/product/add', [ProductController::class, 'add'])->name('product.add');
        Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    }
);

//read only for non admin
Route::get('/category', [CategoryController::class, 'show'])->name('category.show');
Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::delete('/product/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

//auth
Route::view('login', 'auth.login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');
Route::view('register', 'auth.register')->name('register');
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');

Route::get('logout', [UserController::class, 'logout'])->name('logout');
