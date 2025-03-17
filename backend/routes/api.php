<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HouseController;

Route::prefix('/user')->group(function() {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
});

Route::prefix('district')->group(function() {
    Route::get('/show-district', [DistrictController::class, 'showDistrict']);
});

Route::prefix('house-manager')->group(function(){
    Route::get('/show-house/user/{userId}', [HouseController::class, 'getHouseByOwner']);
});