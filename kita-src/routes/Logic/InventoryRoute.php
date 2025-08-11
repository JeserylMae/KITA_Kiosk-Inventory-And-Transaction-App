<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\InventoryController;

// DOMAIN/inventories
Route::controller(InventoryController::class)->group(function () 
{
    Route::middleware(['auth', 'verified'])->group(function () 
    {
        Route::get('/inventories', 'index')->middleware('role:admin')->name('inventory.index');

        Route::middleware(['role:admin,owner,employee'])->group(function () 
        {
            Route::post('/inventories', 'store')->name('inventory.store');
            Route::patch('/inventories/{inventory}', 'update')->name('inventory.update');
            Route::delete('/inventories/{inventory}', 'destroy')->name('inventory.destroy');
        });
    });
});