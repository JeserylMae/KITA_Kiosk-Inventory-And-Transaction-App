<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\StoreController;

// DOMAIN/stores
Route::controller(StoreController::class)->group(function ()
{
    Route::middleware(['auth', 'verified'])->group(function () 
    {
        Route::get('/stores', 'index')->middleware('role:admin')->name('store.index');
        
        Route::middleware('role:owner,employee')->group(function () 
        {
            Route::post('/stores', 'store')->name('store.store');
            Route::patch('/stores/{store}', 'update')->name('store.update');
            Route::delete('/stores/{store}', 'destroy')->name('store.destroy');
        });
    });
});