<?php

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

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create']);
    Route::get('/dashboard/{id}', [App\Http\Controllers\ProductController::class, 'delete']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/profiles', [App\Http\Controllers\ProfilesController::class, 'index']);
    Route::get('/profiles/{id}', [\App\Http\Controllers\ProfilesController::class, 'show']);
    Route::get('/productList/{id}', [\App\Http\Controllers\ProfilesController::class, 'productList']);
    Route::get('/borrowedList/{id}', [\App\Http\Controllers\ProfilesController::class, 'borrowedList']);
    Route::get('/account/{id}', [App\Http\Controllers\ProfilesController::class, 'account']);
});

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show']);
Route::resource('product', \App\Http\Controllers\ProductController::class);

/*Route::middleware(['auth'])->group(function(){
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'indexLogin'])->middleware(['auth']);
});*/

/*Route::middleware(['auth', 'age'])->group(function(){
    Route::get('/drinks', [App\Http\Controllers\DrinksController::class, 'index']);
});*/

Route::get('/dashboard', [\App\Http\Controllers\ProductController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';


//Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
