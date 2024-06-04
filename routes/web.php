<?php

use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\HomeController;
use App\Admin\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/home', [HomeController::class, 'index']);
Route::resource('/admin/utilisateurs', UserController::class);
