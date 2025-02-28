<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\YachtController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Yacht routes
Route::get('yachts', [YachtController::class, 'index']);           // List all yachts
Route::post('yachts', [YachtController::class, 'store']);          // Create a new yacht
Route::get('yachts/{id}', [YachtController::class, 'show']);       // Show a specific yacht
Route::put('yachts/{id}', [YachtController::class, 'update']);     // Update a specific yacht
Route::delete('yachts/{id}', [YachtController::class, 'destroy']); // Delete a specific yacht


// Package routes
// Route::get('packages', function(){ return response()->json("test");});           // List all packages
Route::get('packages', [PackageController::class, 'index']);           // List all packages
Route::post('packages', [PackageController::class, 'store']);          // Create a new package
Route::get('packages/{id}', [PackageController::class, 'show']);       // Show a specific package
Route::put('packages/{id}', [PackageController::class, 'update']);     // Update a specific package
Route::delete('packages/{id}', [PackageController::class, 'destroy']); // Delete a specific package

// Booking routes
Route::get('bookings', [BookingController::class, 'index']);           // List all bookings
Route::post('bookings', [BookingController::class, 'store']);          // Create a new booking
Route::get('bookings/{id}', [BookingController::class, 'show']);       // Show a specific booking
Route::put('bookings/{id}', [BookingController::class, 'update']);     // Update a specific booking
Route::delete('bookings/{id}', [BookingController::class, 'destroy']); // Delete a specific booking

// User routes
Route::get('users', [UserController::class, 'index']);           // List all users
Route::post('users', [UserController::class, 'store']);          // Create a new user
Route::get('users/{id}', [UserController::class, 'show']);       // Show a specific user
Route::put('users/{id}', [UserController::class, 'update']);     // Update a specific user
Route::delete('users/{id}', [UserController::class, 'destroy']); // Delete a specific user
