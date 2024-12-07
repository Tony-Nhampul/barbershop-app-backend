<?php

use App\Http\Controllers\Api\BarbershopController;
use App\Http\Controllers\Api\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1', 'as' => 'api.'], function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/signup', [AuthController::class, 'store'])->name('signup');
    Route::get('/barbershops', [BarbershopController::class, 'index'])->name('home');
    Route::get('/barbershop/{id}', [BarbershopController::class, 'show'])->name('barbershopDetails');
    Route::get('/searchbarbershops', [BarbershopController::class, 'search'])->name('searchBarbershops');
    
    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('/booking', [BookingController::class, 'store'])->name('createBooking');
        Route::get('/bookings/{id}', [BookingController::class, 'index'])->name('bookings');
        Route::delete('/bookings/{booking_id}', [BookingController::class, 'destroy'])->name('deleteBookings');
        Route::post('/bookingsOfTheDay', [BookingController::class, 'getBookingsOfTheDay'])->name('bookingsOfTheDay');
    });
});