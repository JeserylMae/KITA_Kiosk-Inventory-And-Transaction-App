<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\ProductSupplierController;

// DOMAIN/product-suppliers
Route::controller(ProductSupplierController::class)->group(function () 
{
    Route::middleware(['auth', 'verified', 'role:admin,seller'])->group(function ()
    {
        Route::get('/product-suppliers', 'index')->name('product-supplier.index');
        Route::post('/product-suppliers', 'store')->name('product-supplier.store');
        Route::patch('/product-suppliers/{productSupplier}', 'update')->name('product-supplier.update');
        Route::delete('/product-suppliers/{productSupplier}', 'destroy')->name('product-supplier.destroy');
    });
});