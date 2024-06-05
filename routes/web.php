<?php

use App\Admin\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\HomeController;
use App\Admin\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


// Route::resource('/', ProduitController::class);
Route::resource('/admin/utilisateurs', UserController::class);
