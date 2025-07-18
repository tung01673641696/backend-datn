<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\WardController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RentalRequestController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\ServiceBillController;

Route::prefix('/user')->group(function() {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/get-all-user', [UserController::class, 'getAllUser']);
    Route::delete('/delete-user/user_id/{userId}', [UserController::class, 'deleteUser']);
    Route::get('/get-detail-user/user_id/{userId}', [UserController::class, 'getDetailUser']);
    Route::put('/restore-user/user_id/{userId}', [UserController::class, 'restoreUser']);
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

Route::prefix('/posts')->group(function() {
    Route::post('/add-posts-by-customer', [PostController::class, 'customerAddPost']);
    Route::get('/get-one-posts-by-customer/posts_id/{postId}', [PostController::class, 'showPostCustomer']);
    Route::put('/edit-posts-by-customer/posts_id/{postId}', [PostController::class, 'customerUpdatePost']);
    Route::delete('/delete-posts-by-customer/posts_id/{postId}', [PostController::class, 'customerDeletePost']);

    Route::post('/add-posts-by-landlord', [PostController::class, 'landlordAddPost']);
    Route::get('/landlord-get-all-post/landlord_id/{landlordId}', [PostController::class, 'landlordGetAllPost']);
    Route::get('/tenant-get-all-post/tenant_id/{tenantId}', [PostController::class, 'tenantGetAllPost']);
});

Route::prefix('/admin')->group(function() {
    Route::get('/get-all-posts-by-all-customer', [PostController::class, 'getPostsCustomers']);
    Route::put('/approve-posts/{id}', [PostController::class, 'approvePostCustomer']);
    Route::put('/reject-posts/{id}', [PostController::class, 'rejectPostCustomer']);

    Route::get('/get-all-posts-by-all-landlord', [PostController::class, 'getPostsLandlord']);
});

Route::get('/get-all-posts-by-all-customer-active', [PostController::class, 'getAllPostByCustomerActive']);
Route::get('/get-all-posts-by-all-landlord-active', [PostController::class, 'getAllPostByLandlordActive']);
Route::get('/get-all-posts-by-all-landlord-active-by-district/district_id/{districtId}', [PostController::class, 'getAllPostByLandlordActiveByDistrict']);


Route::post('/rental_request/user_id/{userId}/room_id/{roomId}', [RentalRequestController::class, 'rentalRequest']);
Route::get('/all-rental-request/user_id/{userId}', [RentalRequestController::class, 'getAllRentalRequest']);
Route::put('/rental-requests/{id}/reject', [RentalRequestController::class, 'reject']);
Route::put('/rental-requests/{id}/approve', [RentalRequestController::class, 'approve']);

Route::get('/get-detail-tenant-by-room/room_id/{roomId}', [TenantController::class, 'getDetailTenantByRoom']);


Route::prefix('/contract')->group(function() {
    Route::post('/create-deposit-contracts', [ContractController::class, 'createDepositContract']);
    Route::get('/all-deposit-contract-by-renter/renter/{renterId}', [ContractController::class, 'getAllDepositContractByRenter']);
    Route::get('/deposit-contract-detail/renter/{renterId}/room/{roomId}', [ContractController::class, 'getDepositContractDetail']);
    Route::put('/cancel/{id}', [ContractController::class, 'cancelDepositContract']);
    Route::put('/confirm/{id}', [ContractController::class, 'confirmDepositContract']);
    Route::get('/landlord/{landlordId}/deposit-contracts', [ContractController::class, 'getAllDepositContractsByLandlord']);

    Route::post('/create-contract', [ContractController::class, 'createContract']);
    Route::get('/get-all-rental-contract-by-tenant/tenant/{tenantId}', [ContractController::class, 'getAllRentalContractsByTenant']);

    Route::get('manager-contract/landlord-get-all-contract/landlord/{landlordId}', [ContractController::class, 'landlordGetAllContract']);
    Route::get('/rental-contract-detail/room/{roomId}', [ContractController::class, 'getRentalContractDetail']);

    Route::put('/renew/{contractId}', [ContractController::class, 'renewContract']);
});

Route::prefix('/bill')->group(function() {
    Route::post('/add-bill', [ServiceBillController::class, 'addServiceBill']);
    Route::get('/get-all-service-bill-by-landlord', [ServiceBillController::class, 'getAllServiceBillByLandlord']);
    Route::put('/update-bill/{id}', [ServiceBillController::class, 'updateStatusBill']);
    Route::get('/get-detail-bill/{id}', [ServiceBillController::class, 'getDetailBill']);

    Route::get('/get-all-service-bill-by-tenant/{tenantId}', [ServiceBillController::class, 'getAllServiceBillByTenant']);
});