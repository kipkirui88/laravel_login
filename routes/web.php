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
use App\Http\Livewire\UserList;

Route::middleware(['auth'])->group(function () {
    Route::get('/users', UserList::class);
});

require __DIR__.'/auth.php';
