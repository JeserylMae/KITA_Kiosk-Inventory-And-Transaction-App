<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\UserController;

// DOMAIN/users
Route::controller(UserController::class)->group(function () 
{
    Route::post('/users', 'store')->name('user.store');
    
    Route::middleware(['auth', 'verified', 'role:admin,seller,cashier'])->group(function () 
    {
        Route::get('/users', 'index')->middleware('role:admin')->name('user.index');
        Route::get('/users/me', 'me')->name('user.me');
        Route::patch('/users/{user}', 'update')->name('user.update');
        Route::delete('/users/{user}', 'destroy')->name('user.destroy');
    });
});
