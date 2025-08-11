<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Livewire\Components\Landing;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


Route::get('/csrf-token', function () {
    return response()->json(['token' => csrf_token()]);
});

Route::get('/email/verify', function () {
    return view('auth.verify-email'); 
})->middleware('auth')->name('verification.notice');


/*
 * Logic Routes 
 */

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill(); // Marks email as verified
    return redirect('/dashboard?verified=1');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::controller(AuthController::class)->group(function () {
    Route::post('auth/signup', 'signup')->name('user.signup');
    Route::post('auth/login', 'login')->name('user.login');
    Route::post('auth/logout', 'logout')->name('user.logout');
});

require base_path('routes/Logic/UserRoute.php');
require base_path('routes/Logic/ProductRoute.php');
require base_path('routes/Logic/InventoryRoute.php');
require base_path('routes/Logic/SupplierRoute.php');
require base_path('routes/Logic/ProductCategoryRoute.php');
require base_path('routes/Logic/ProductSupplierRoute.php');
require base_path('routes/Logic/TransactionRoute.php');
require base_path('routes/Logic/DeliveryRoute.php');
require base_path('routes/Logic/StoreRoute.php');


/*
 * User Inteface Routes 
 */ 
Route::get('/', Landing::class)->name('landing');
