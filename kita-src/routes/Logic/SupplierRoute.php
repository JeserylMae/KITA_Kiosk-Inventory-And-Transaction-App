<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\SupplierController;
use Illuminate\Auth\Events\Verified;

// DOMAIN/suppliers
Route::controller(SupplierController::class)->group(function () 
{
    Route::middleware(['auth', 'verified'])->group(function ()
    {
        Route::get('/suppliers', 'index')->name('supplier.index');
        Route::post('/suppliers', 'store')->name('supplier.store');
        Route::patch('/suppliers/{supplier}', 'update')->name('supplier.update');
        Route::delete('/suppliers/{supplier}', 'destroy')->name('supplier.destroy');
    });
});