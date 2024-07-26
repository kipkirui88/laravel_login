<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Register;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::get('/register', Register::class)->name('register');

Route::get('/about', function(){
    return view('about');
});

require __DIR__.'/auth.php';
