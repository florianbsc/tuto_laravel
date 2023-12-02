<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PostController::class, 'index'] );
Route::get('{id_post}',[\App\Http\Controllers\PostController::class, 'show'] );
