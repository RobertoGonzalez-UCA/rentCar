<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[UserAuthController::class,'login']);
Route::get('register',[UserAuthController::class,'register']);
Route::post('create',[UserAuthController::class,'create'])->name('auth.create');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');