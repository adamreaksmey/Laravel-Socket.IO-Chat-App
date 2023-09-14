<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Publish\Publisher;

Route::get('/', [MainController::class, 'home'])->middleware('auth');
Route::post('/', [MainController::class, 'store']);
Route::get('/logout', [Publisher::class, 'publish']);
