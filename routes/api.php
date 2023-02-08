<?php

use App\Http\Controllers\BlockDayController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;


Route::get('/vehicles', [VehicleController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/bookings', [BookingController::class, 'index']);
Route::post('/bookings', [BookingController::class, 'store']);

Route::get('/slots', [SlotController::class, 'index']);
Route::post('/slots', [SlotController::class, 'update']);
Route::get('/available-slots', [SlotController::class, 'getAvailableSlotTimes']);

Route::post('/block-day', [BlockDayController::class, 'store']);
