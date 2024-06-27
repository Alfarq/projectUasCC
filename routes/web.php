<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConcertController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('guest');
    }
});

Auth::routes();

Route::get('/login', function () {
    return view('auth.login'); // Mengarahkan ke view auth.login
})->name('login');

Route::get('/register', function () {
    return view('auth.register'); // Mengarahkan ke view auth.register
})->name('register');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/detail', [HomeController::class, 'showDetail'])->name('detail');
Route::get('/home', [ConcertController::class, 'index'])->name('concerts.index');
Route::get('/concert/{id}', [ConcertController::class, 'show'])->name('concert.show');
