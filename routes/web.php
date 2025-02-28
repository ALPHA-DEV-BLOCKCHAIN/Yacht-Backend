<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});
Route::get('/', function () {
    return view('register');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
use Illuminate\Support\Facades\Auth;

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
