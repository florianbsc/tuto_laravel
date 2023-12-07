<?php
// vue interface utilisateur
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [\App\Http\Controllers\PostController::class, 'index'] );
Route::get('{post}',[\App\Http\Controllers\PostController::class, 'show'] );
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'home'])->name('product.home');
