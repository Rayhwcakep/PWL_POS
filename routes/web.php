<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/level',[LevelController::class, 'index']);
route::get('/kategori', [kategoriController::class, 'index']);
route::get('/user', [UserController::class, 'index']);
