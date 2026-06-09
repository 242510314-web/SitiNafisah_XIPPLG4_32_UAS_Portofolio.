<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return redirect('/login');
});

// tampilkan login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// proses login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// dashboard sederhana setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


// halaman lain
Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/contact', function () {
    return view('contact');
});

// logout
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');