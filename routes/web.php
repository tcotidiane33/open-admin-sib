<?php

use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/home', [HomeController::class, 'index']);
