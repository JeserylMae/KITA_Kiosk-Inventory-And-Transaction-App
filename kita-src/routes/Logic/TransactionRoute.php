<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logic\TransactionController;

// DOMAIN/transactions
Route::controller(TransactionController::class)->group(function ()
{
    Route::middleware(['auth', 'verified'])->group(function ()
    {
        Route::get('/transactions', 'index')->name('transaction.index');
        Route::post('/transactions', 'store')->name('transaction.store');
        Route::patch('/transactions/{transaction}', 'update')->name('transaction.update');
        Route::delete('/transactions/{transaction}', 'destroy')->name('transaction.destroy');
    });
});