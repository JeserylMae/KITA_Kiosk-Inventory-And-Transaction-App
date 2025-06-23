<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Livewire\Components\Landing;
use App\Livewire\Components\Login;
use App\Livewire\Components\Register;


Route::get('/', Landing::class)->name('landing');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
