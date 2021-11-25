<?php

use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Nguoitimviec\TaocvController;
use App\Http\Controllers\Nguoitimviec\AuthController;
use App\Http\Controllers\Nguoitimviec\HomeController as NguoitimviecHomeController;
<<<<<<< HEAD
use App\Http\Controllers\Nhatuyendung\HomeController as NhatuyendungHomeController;
use App\Http\Controllers\Nguoitimviec\HosoController;
use App\Http\Controllers\Nguoitimviec\UploadController;
use App\Http\Controllers\Nhatuyendung\JobController;
=======
use App\Http\Controllers\Nguoitimviec\HosoController;
>>>>>>> 7b205d17fd2792194514ca89701f9c014d07c5e2
use App\Http\Controllers\Nhatuyendung\AuthBusinessController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/timviec', [LoginController::class, 'timviec']);
Route::get('/', [HomeController::class, 'index'])->name('home');


//-----------------User-------------------
//  --------Auth---------
Route::get('user/login', [AuthController::class, 'index'])->name('userlogin');
Route::post('user-home', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('user/register', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
//  ------Ho so---------
Route::get('user',[NguoitimviecHomeController::class, 'index'])->name('userhome');
Route::get('user/hoso',[HosoController::class, 'index']);
Route::get('user/hoso/taocv',[HosoController::class, 'index_taocv']);



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
<<<<<<< HEAD
});



//-----------------User-------------------

Route::prefix('user')->group(function (){
    Route::get('/',[NguoitimviecHomeController::class, 'index'])->name('userhome');

    //  --------Auth---------
    Route::get('login', [AuthController::class, 'index'])->name('userlogin');
    Route::get('register', [AuthController::class, 'registration'])->name('register-user');

    //  ------Ho so---------
    Route::prefix('hoso')->group(function (){
        Route::get('/',[HosoController::class, 'index']);
        Route::get('taocv',[HosoController::class, 'index_taocv']);
    });
});



Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::post('user-home', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');





#Upload
Route::post('user/upload/services', [UploadController::class, 'store']);



//-----------Business-------------

Route::prefix('business')->group(function (){
    Route::get('/',[NhatuyendungHomeController::class, 'index'])->name('bussinesshome');

    //  --------Auth---------
    Route::get('login', [AuthBusinessController::class, 'index'])->name('businesslogin');
    Route::get('register', [AuthBusinessController::class, 'registration'])->name('register-business');

    //  --------Job---------
    Route::prefix('job')->group(function (){
        Route::get('/',[JobController::class, 'B_JobList']);
        Route::get('UpLoadJob',[JobController::class, 'B_CreateJob']);
    });

});

Route::post('business-home', [AuthBusinessController::class, 'customLogin'])->name('login.business'); 
Route::post('business-registration', [AuthBusinessController::class, 'customRegistration'])->name('register.business'); 
Route::get('signout', [AuthBusinessController::class, 'signOut'])->name('signout');



//---------------HOME-----------------
Route::get('/', [HomeController::class, 'index'])->name('home');

=======
});




>>>>>>> 7b205d17fd2792194514ca89701f9c014d07c5e2

