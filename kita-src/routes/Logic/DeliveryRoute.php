<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\DeliveryController;

// DOMAIN/deliveries
Route::controller(DeliveryController::class)->group(function ()
{
    Route::middleware(['auth', 'verified'])->group(function ()
    {
        Route::get('/deliveries', 'index')->middleware('role:admin')->name('delivery.index');

        Route::middleware('role:admin,seller')->group(function () {
            Route::post('/deliveries', 'store')->name('delivery.store');
            Route::patch('/deliveries/{delivery}', 'update')->name('delivery.update');
            Route::patch('/deliveries/{delivery}', 'destroy')->name('delivery.destroy');
        });
    });
});