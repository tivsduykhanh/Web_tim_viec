<?php

use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Nguoitimviec\TaocvController;
use App\Http\Controllers\Nguoitimviec\AuthController;
use App\Http\Controllers\Nhatuyendung\AuthBusinessController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/timviec', [LoginController::class, 'timviec']);
Route::get('user/taocv',[TaocvController::class,'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');


//------------User---------------
Route::get('user/login', [AuthController::class, 'index'])->name('userlogin');
Route::post('user-home', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('user/register', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


//-----------Business-------------
Route::get('business/login', [AuthBusinessController::class, 'index'])->name('businesslogin');
Route::post('business-home', [AuthBusinessController::class, 'customLogin'])->name('login.business'); 
Route::get('business/register', [AuthBusinessController::class, 'registration'])->name('register-business');
Route::post('business-registration', [AuthBusinessController::class, 'customRegistration'])->name('register.business'); 
Route::get('signout', [AuthBusinessController::class, 'signOut'])->name('signout');



Route::middleware(['auth'])->group(function () {

    Route::prefix('admin') -> group(function () {

        Route::get('/', [Maincontroller::class, 'index'])->name('admin');
        Route::get('main', [Maincontroller::class, 'index']);
    
    });
});





