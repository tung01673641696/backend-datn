<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\HouseController;

Route::prefix('/user')->group(function() {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
});

Route::prefix('district')->group(function() {
    Route::get('/show-district', [DistrictController::class, 'showDistrict']);
});

Route::prefix('ward')->group(function() {
    Route::get('/show-ward/{district_id}', [WardController::class, 'getWardsByDistrict']);
});

Route::prefix('house-manager')->group(function(){
    Route::get('/count-house', [HouseController::class, 'countHouseByOwner']);
    Route::get('/show-house/user/{userId}', [HouseController::class, 'getHouseByOwner']);
    Route::post('/add-house', [HouseController::class, 'addHouse']);
    Route::put('/edit-house/{id}', [HouseController::class, 'editHouse']);
});