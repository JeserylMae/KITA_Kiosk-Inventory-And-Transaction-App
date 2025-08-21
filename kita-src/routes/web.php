<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Landing;
use App\Http\Controllers\Auth\AuthController;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Inventory;
use App\Livewire\Pages\Login;
use App\Livewire\Pages\Register;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Livewire\Features\SupportPageComponents\LayoutMiddleware;


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
Route::view('/', 'livewire.layout.landing');
Route::get('/register', Register::class)->name('page.register');
Route::get('/login', Login::class)->name('page.login');

/**
 * The default redirect route when accessing the routes below (for example, /dashboard)
 * has a name login. But since i am using page.login, I created an Authenticate.php file
 * in App\Middleware to change it. Then registered the middleware in bootstrap\app.php.
 */
Route::middleware(['auth', 'verified', 'role:admin,owner,employee'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('page.dashboard');
    Route::get('/inventory', Inventory::class)->name('page.inventory');
    Route::get('/sales', Dashboard::class)->name('page.sales');
    Route::get('/expenses', Dashboard::class)->name('page.expenses');
    Route::get('/reports', Dashboard::class)->name('page.reports');
});

/**
 * Fallback method when user accessed a not existing route.
 */
// Route::fallback(function () {
//     return redirect()->route('page.notFound'); 
// });
