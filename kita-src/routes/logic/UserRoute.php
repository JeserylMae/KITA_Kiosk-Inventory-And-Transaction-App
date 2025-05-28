<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\UserController;


Route::controller(UserController::class)->group(function () 
{
    Route::post('/users', 'store')->name('user.store');
    
    Route::middleware(['auth', 'verified'])->group(function () 
    {
        Route::get('/users/me', 'me')->name('user.me');
        Route::get('/users', 'index')->name('user.index');
        Route::patch('/users/{user}', 'update')->name('user.update');
        Route::delete('/users/{user}', 'destroy')->name('user.destroy');
    });
});
