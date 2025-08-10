<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\ProductCategoryController;

// DOMAIN/product-categories
Route::controller(ProductCategoryController::class)->group(function () 
{
    Route::middleware(['auth', 'verified'])->group(function ()
    {
        Route::get('/product-categories', 'index')->name('product-categories.index');
        Route::post('/product-categories', 'store')->name('product-categories.store');
        Route::patch('/product-categories/{productCategory}', 'update')->name('product-categories.update');
        Route::delete('/product-categories/{productCategory}', 'destroy')->name('product-categories.destroy');
    });
});