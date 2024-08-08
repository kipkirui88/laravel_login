<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Auth;

use App\Livewire\TaskList;
use App\Livewire\CreateTask;
use App\Livewire\CompletedTasks;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/tasks', TaskList::class)->name('tasks');
Route::get('/tasks/create', CreateTask::class)->name('tasks.create');
Route::get('/tasks/completed', CompletedTasks::class)->name('tasks.completed');

Route::get('/', function () {
    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/register', Register::class)->name('register');

Route::get('/about', function () {
    return view('about');
});


require __DIR__.'/auth.php';
