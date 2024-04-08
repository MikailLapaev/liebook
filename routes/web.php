<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/catalog', [\App\Http\Controllers\IndexController::class, 'catalog'])->name('catalogPage');
Route::get('{id}/product', [\App\Http\Controllers\IndexController::class, 'productPage'])->name('productPage');




Route::controller(\App\Http\Controllers\AuthController::class)->middleware('guest')->group(function (){
    Route::get('/register', 'registerPage')->name('registerPage');
    Route::post('/register', 'register')->name('register');
    Route::get('/login', 'loginPage')->name('login');
    Route::post('/login', 'login')->name('auth');
});



Route::middleware('auth')->group(function (){
    Route::get('/profile', [\App\Http\Controllers\IndexController::class, 'profile'])->name('profile');

    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});


Route::controller(\App\Http\Controllers\AdminController::class)->middleware('admin')->group(function (){

    Route::get('/admin', 'admin')->name('admin');

//    Product
    Route::prefix('/product')->group(function (){
        Route::get('/create', 'createProduct')->name('createProduct');
        Route::post('/create', 'storeProduct')->name('storeProduct');
        Route::get('{product}/edit', 'editProduct')->name('editProduct');
        Route::patch('{product}/edit', 'updateProduct')->name('updateProduct');
        Route::delete('/{product}/delete', 'destroyProduct')->name('destroyProduct');
    });

//    Category
    Route::prefix('/category')->group(function (){
        Route::get('/create', 'createCategory')->name('createCategory');
        Route::post('/create', 'storeCategory')->name('storeCategory');
        Route::delete('/{id}/delete', 'destroyCategory')->name('destroyCategory');
    });
});


