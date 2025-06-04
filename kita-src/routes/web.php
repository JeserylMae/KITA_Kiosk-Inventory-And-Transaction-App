<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Livewire\Components\Landing;
use App\Livewire\Components\Login;


Route::get('/', Landing::class)->name('landing');
Route::get('/login', Login::class)->name('login');
