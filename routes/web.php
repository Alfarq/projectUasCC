<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('index');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
    
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/', function () {
//     return view('guest');
// });

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('guest');
    }
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', function () {
    return view('auth.login'); // Mengarahkan ke view auth.login
})->name('login');

Route::get('/register', function () {
    return view('auth.register'); // Mengarahkan ke view auth.register
})->name('register');