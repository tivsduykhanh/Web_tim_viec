<?php

use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\HomeController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/timviec', [LoginController::class, 'timviec']);

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('admin', [Maincontroller::class, 'index'])->name('admin');
    Route::get('admin/main', [Maincontroller::class, 'index']);
});

