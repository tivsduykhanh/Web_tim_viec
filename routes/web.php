<?php

use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\User\TaocvController;
=======
>>>>>>> d92abc8fc58a6847ee0bc9fbabe9fc3d056866b4

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/timviec', [LoginController::class, 'timviec']);
Route::get('user/taocv',[TaocvController::class,'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('admin', [Maincontroller::class, 'index'])->name('admin');
    Route::get('admin/main', [Maincontroller::class, 'index']);
});

