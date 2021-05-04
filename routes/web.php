<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\RentController;



Route::middleware(['AlreadyLoggedIn'])->group(function(){

    // UserAuth routes
    Route::get('/',[UserAuthController::class,'login']);
    Route::get('login',[UserAuthController::class,'login']);
    Route::get('register',[UserAuthController::class,'register']);
    Route::post('check',[UserAuthController::class,'check'])->name('auth.check');

});

Route::middleware(['isLogged'])->group(function(){

    // UserAuth routes
    Route::post('create',[UserAuthController::class,'create'])->name('auth.create');
    Route::get('logout',[UserAuthController::class,'logout']);

    Route::get('menu', [AdController::class, 'menu'])->name('menu');
    Route::get('show/{ad}', [AdController::class, 'show'])->name('show');
    Route::get('brand/{name}', [AdController::class, 'brand'])->name('brand');
    Route::get('type/{name}', [AdController::class, 'type'])->name('type');

    // Rent routes
    Route::post('store',[RentController::class, 'store'])->name('store');
    Route::get('list',[RentController::class, 'list'])->name('list');
    Route::get('showrent/{rent}',[RentController::class, 'showrent'])->name('showrent');
});


