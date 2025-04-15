<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\VehicleController;

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
    Route::post('/add-room', [RoomController::class, 'addRoom']);
    Route::get('/get-one-room/room_id/{roomId}', [RoomController::class, 'getOneRoom']);
    Route::put('/edit-room/{roomId}', [RoomController::class, 'editRoom']);
    Route::delete('/delete-room/room_id/{roomId}', [RoomController::class, 'deleteRoom']);
});

Route::prefix('/tenant-manager')->group(function() {
    Route::post('/add-tenant', [TenantController::class, 'addTenant']);
    Route::get('/get-all-tenant', [TenantController::class, 'getAllTenant']);
    Route::get('/get-one-tenant/tenant_id/{tenantId}', [TenantController::class, 'getOneTenant']);
    Route::put('/edit-tenant/{tenantId}', [TenantController::class, 'editTenant']);
    Route::delete('/delete-tenant/tenant_id/{tenantId}', [TenantController::class, 'deleteTenant']);
    Route::get('/get-tenant-by-room/room_id/{roomId}', [TenantController::class, 'getTenantByRoom']);
}); 

Route::prefix('/vehicle-manager')->group(function() {
    Route::post('/add-vehicle', [VehicleController::class, 'addVehicle']);
    Route::get('/get-all-vehicle', [VehicleController::class, 'getAllVehicle']);
    Route::delete('/delete-vehicle/vehicle_id/{vehicleId}', [VehicleController::class, 'deleteVehicle']);
    Route::get('/get-one-vehicle/vehicle_id/{vehicleId}', [VehicleController::class, 'getOneVehicle']);
    Route::put('/edit-vehicle/{vehicleId}', [VehicleController::class, 'editVehicle']);
}); 