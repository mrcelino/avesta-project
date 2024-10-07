<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('about', 'about');

Route::view('regis', 'register');

Route::view('login2', 'login');

Route::get('/home', \App\Livewire\Home::class);

require __DIR__.'/auth.php';