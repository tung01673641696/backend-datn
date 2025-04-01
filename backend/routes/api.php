<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\RoomController;

Route::prefix('/user')->group(function() {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
});

Route::prefix('/district')->group(function() {
    Route::get('/show-district', [DistrictController::class, 'showDistrict']);
});

Route::prefix('/ward')->group(function() {
    Route::get('/show-ward/{district_id}', [WardController::class, 'getWardsByDistrict']);
});

Route::prefix('/house-manager')->group(function(){
    Route::get('/count-house/user/{userId}', [HouseController::class, 'countHouseByOwner']);
    Route::get('/show-house/user/{userId}', [HouseController::class, 'getHouseByOwner']);
    Route::post('/add-house', [HouseController::class, 'addHouse']);
    Route::put('/edit-house/{houseId}', [HouseController::class, 'editHouse']);
    Route::delete('/delete-house/house_id/{houseId}', [HouseController::class, 'deleteHouse']);
    Route::get('/get-one-house/{houseId}', [HouseController::class, 'getOneHouse']);
});

Route::prefix('/room-manager')->group(function(){
    Route::get('/show-room/house_id/{houseId}', [RoomController::class, 'getRoomByHouse']);
});