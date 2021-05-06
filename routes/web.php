<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\AdminController;


Route::middleware(['AlreadyLoggedIn'])->group(function(){

    // UserAuth routes
    Route::get('/',[UserAuthController::class,'login']);
    Route::get('login',[UserAuthController::class,'login']);
    Route::get('register',[UserAuthController::class,'register']);
    Route::post('check',[UserAuthController::class,'check'])->name('auth.check');

});

Route::middleware(['isLogged'])->group(function(){

    Route::get('logout',[UserAuthController::class,'logout']);

    // Ad routes
    Route::get('menu', [AdController::class, 'menu'])->name('menu');
    Route::get('show/{ad}', [AdController::class, 'show'])->name('show');
    Route::get('brand/{name}', [AdController::class, 'brand'])->name('brand');
    Route::get('type/{name}', [AdController::class, 'type'])->name('type');
    Route::get('create_form/ad', [AdController::class, 'create_form_ad'])->name('create_form.ad');
    Route::post('create/ad', [AdController::class, 'create_ad'])->name('create.ad');
    Route::get('delete_form/ad', [AdController::class, 'delete_form_ad'])->name('delete.ad');
    Route::get('delete/ad/{ad}', [AdController::class, 'delete_ad'])->name('delete.ad');
    Route::get('update/ad', [AdController::class, 'update_ad'])->name('update.ad');

    // Admin routes
    Route::get('admin', [AdminController::class, 'menu'])->name('admin.menu');

    // Rent routes
    Route::post('store',[RentController::class, 'store'])->name('store');
    Route::get('list',[RentController::class, 'list'])->name('list');
    Route::get('showrent/{rent}',[RentController::class, 'showrent'])->name('showrent');
});

// UserAuth routes
Route::post('create',[UserAuthController::class,'create'])->name('auth.create');


