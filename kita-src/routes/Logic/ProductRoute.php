<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\ProductsController;
use App\Models\Product;

// DOMAIN/products
Route::controller(Product::class)->group(function ()
{
    Route::middleware(['auth', 'verified'])->group(function () 
    {
        Route::get('/products', 'index')->middleware('role:admin')->name('product.index');

        Route::middleware(['role:admin,owner'])->group(function () 
        {
            Route::post('/products', 'store')->name('product.store');
            Route::patch('/proucts/{product}', 'update')->name('product.update');
            Route::delete('/products/{product}', 'destroy')->name('product.destroy');
        });
    });
});