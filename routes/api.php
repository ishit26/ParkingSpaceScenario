<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingController;

Route::get('api/spot/list', [ParkingSpotController::class, 'list']);
Route::post('api/spot/$id/park', [ParkingSpotController::class, 'park']);
Route::post('api/spot/$id/unpark', [ParkingSpotController::class, 'unpark']);