<?php

use App\Http\Controllers\Admin\Maincontroller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Nguoitimviec\TaocvController;
use App\Http\Controllers\Nguoitimviec\AuthController;
use App\Http\Controllers\Nguoitimviec\HomeController as NguoitimviecHomeController;
use App\Http\Controllers\Nguoitimviec\HosoController;
use App\Http\Controllers\Nguoitimviec\UploadController;
use App\Http\Controllers\Nhatuyendung\AuthBusinessController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/timviec', [LoginController::class, 'timviec']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin') -> group(function () {

        Route::get('/', [Maincontroller::class, 'index'])->name('admin');
        Route::get('main}', [Maincontroller::class, 'index']);
    
    });
});





//-----------------User-------------------

Route::prefix('/user')->group(function (){
    Route::get('/',[NguoitimviecHomeController::class, 'index'])->name('userhome');

    //  --------Auth---------
    Route::get('/login', [AuthController::class, 'index'])->name('userlogin');
    Route::get('/register', [AuthController::class, 'registration'])->name('register-user');

    //  ------Ho so---------
    Route::prefix('/hoso')->group(function (){
        Route::get('/',[HosoController::class, 'index']);
        
        Route::get('/add',[HosoController::class, 'create']);
        Route::post('/addhoso',[HosoController::class, 'store'])->name('them_hoso');

        Route::get('/{id}/edit', [HosoController::class, 'edit']);
        Route::post('/update', [HosoController::class, 'update']);
        Route::get('/{id}/delete', [HosoController::class, 'destroy']);
        
    });


    // #Upload
    // Route::post('upload/services', [UploadController::class, 'store']);
});



Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::post('user-home', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');






//-----------Business-------------

Route::prefix('business')->group(function (){

    Route::get('login', [AuthBusinessController::class, 'index'])->name('businesslogin');
    Route::get('register', [AuthBusinessController::class, 'registration'])->name('register-business');

});

Route::post('business-home', [AuthBusinessController::class, 'customLogin'])->name('login.business'); 
Route::post('business-registration', [AuthBusinessController::class, 'customRegistration'])->name('register.business'); 
Route::get('signout', [AuthBusinessController::class, 'signOut'])->name('signout');



//---------------HOME-----------------
Route::get('/', [HomeController::class, 'index'])->name('home');


