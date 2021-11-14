<?php

use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/timviec', [LoginController::class, 'timviec']);

Route::middleware(['auth'])->group(function () {
    Route::get('admin', [Maincontroller::class, 'index'])->name('admin');
    Route::get('admin/main', [Maincontroller::class, 'index']);
});

