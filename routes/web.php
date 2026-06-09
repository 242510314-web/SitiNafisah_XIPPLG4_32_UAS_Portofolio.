<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

// redirect ke login
Route::get('/', function () {
    return redirect('/login');
});

// =====================
// LOGIN
// =====================
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

// dashboard (harus login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// =====================
// HALAMAN PORTFOLIO
// =====================
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

// =====================
// CONTACT SYSTEM (KIRIM & LIHAT PESAN)
// =====================
Route::post('/contact/send', [ContactController::class, 'send']);
Route::get('/inbox', [ContactController::class, 'inbox']);

// =====================
// LOGOUT
// =====================
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');