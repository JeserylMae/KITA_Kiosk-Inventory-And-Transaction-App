<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Livewire\Components\Landing;
use App\Livewire\Components\Login;
use App\Livewire\Components\Register;
use App\Livewire\Components\Dashboard;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
 * User Inteface Routes 
 */ 
Route::get('/', Landing::class)->name('landing');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');

Route::get('/csrf-token', function () {
    return response()->json(['token' => csrf_token()]);
});

Route::get('/email/verify', function () {
    return view('auth.verify-email'); // You can customize this Blade view
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
});

require base_path('routes/Logic/UserRoute.php');