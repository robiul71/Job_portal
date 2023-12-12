<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Frontend\AuthController;
use Illuminate\Support\Facades\Route;




Route::get('/',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');




Route::group(['prefix' => 'dashboard'], function () {

Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

});
