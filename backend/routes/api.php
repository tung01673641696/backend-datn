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
use App\Http\Controllers\PostController;

Route::prefix('/user')->group(function() {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/get-all-user', [UserController::class, 'getAllUser']);
    Route::delete('/delete-user/user_id/{userId}', [UserController::class, 'deleteUser']);
});

Route::prefix('/district')->group(function() {
    Route::get('/show-district', [DistrictController::class, 'showDistrict']);
});

Route::prefix('/ward')->group(function() {
    Route::get('/show-ward/{district_id}', [WardController::class, 'getWardsByDistrict']);
});

Route::prefix('/house-manager')->group(function(){
    Route::get('/count-house/user/{userId}', [HouseController::class, 'hostCountHouse']);
    Route::get('/show-house/user/{userId}', [HouseController::class, 'getHouseHost']);
    Route::post('/add-house', [HouseController::class, 'addHouse']);
    Route::put('/edit-house/{houseId}', [HouseController::class, 'updateHouse']);
    Route::delete('/delete-house/house_id/{houseId}', [HouseController::class, 'deleteHouse']);
    Route::get('/get-one-house/{houseId}', [HouseController::class, 'showHouse']);
});

Route::prefix('/room-manager')->group(function(){
    Route::get('/show-room/house_id/{houseId}', [RoomController::class, 'getRoomHouse']);
    Route::post('/add-room', [RoomController::class, 'addRoom']);
    Route::get('/get-one-room/room_id/{roomId}', [RoomController::class, 'showRoom']);
    Route::put('/edit-room/{roomId}', [RoomController::class, 'updateRoom']);
    Route::delete('/delete-room/room_id/{roomId}', [RoomController::class, 'deleteRoom']);
});

Route::prefix('/tenant-manager')->group(function() {
    Route::post('/add-tenant', [TenantController::class, 'addTenant']);
    Route::get('/get-all-tenant', [TenantController::class, 'getAllTenant']);
    Route::get('/get-one-tenant/tenant_id/{tenantId}', [TenantController::class, 'showTenant']);
    Route::put('/edit-tenant/{tenantId}', [TenantController::class, 'updateTenant']);
    Route::delete('/delete-tenant/tenant_id/{tenantId}', [TenantController::class, 'deleteTenant']);
    Route::get('/get-tenant-by-room/room_id/{roomId}', [TenantController::class, 'getTenantRoom']);
}); 

Route::prefix('/vehicle-manager')->group(function() {
    Route::post('/add-vehicle', [VehicleController::class, 'addVehicle']);
    Route::get('/get-all-vehicle', [VehicleController::class, 'getAllVehicle']);
    Route::delete('/delete-vehicle/vehicle_id/{vehicleId}', [VehicleController::class, 'deleteVehicle']);
    Route::get('/get-one-vehicle/vehicle_id/{vehicleId}', [VehicleController::class, 'getOneVehicle']);
    Route::put('/edit-vehicle/{vehicleId}', [VehicleController::class, 'editVehicle']);
});

Route::prefix('/posts')->group(function() {
    Route::post('/add-posts-by-customer', [PostController::class, 'customerAddPost']);
    Route::get('/get-one-posts-by-customer/posts_id/{postId}', [PostController::class, 'showPostCustomer']);
    Route::put('/edit-posts-by-customer/posts_id/{postId}', [PostController::class, 'customerUpdatePost']);
    Route::delete('/delete-posts-by-customer/posts_id/{postId}', [PostController::class, 'customerDeletePost']);

    Route::post('/add-posts-by-landlord', [PostController::class, 'landlordAddPost']);
    Route::get('/get-posts-by-one-customer/customer_id/{customerId}', [PostController::class, 'getPostsCustomer']);
});

Route::prefix('/admin')->group(function() {
    Route::get('/get-all-posts-by-all-customer', [PostController::class, 'getPostsCustomers']);
    Route::put('/approve-posts-by-customer/{id}', [PostController::class, 'approvePostCustomer']);
    Route::put('/reject-posts-by-customer/{id}', [PostController::class, 'rejectPostCustomer']);
});

Route::get('/get-all-posts-by-all-customer-active', [PostController::class, 'getAllPostByCustomerActive']);