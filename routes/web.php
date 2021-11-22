<?php

use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\User\TaocvController;
<<<<<<< HEAD
use App\Http\Controllers\User\AuthController;

=======
<<<<<<< HEAD
use App\Http\Controllers\User\TaocvController;
=======
>>>>>>> d92abc8fc58a6847ee0bc9fbabe9fc3d056866b4
>>>>>>> 005fd530be0498fc823ed6c4f245bd5e0dbc6e85
=======
=======
>>>>>>> d92abc8fc58a6847ee0bc9fbabe9fc3d056866b4
>>>>>>> 005fd530be0498fc823ed6c4f245bd5e0dbc6e85

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/timviec', [LoginController::class, 'timviec']);
Route::get('user/taocv',[TaocvController::class,'index']);
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('user/login', [AuthController::class, 'index'])->name('userlogin');
Route::post('user-home', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('user/register', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


=======
Route::get('/', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
>>>>>>> 005fd530be0498fc823ed6c4f245bd5e0dbc6e85
=======
Route::get('/', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
>>>>>>> 005fd530be0498fc823ed6c4f245bd5e0dbc6e85

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin') -> group(function () {

        Route::get('/', [Maincontroller::class, 'index'])->name('admin');
        Route::get('main', [Maincontroller::class, 'index']);
    
    });
});





