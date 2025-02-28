<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HouseController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('district')->group(function() {
    Route::get('/show-district', [DistrictController::class, 'showDistrict']);
});

Route::prefix('house-manager')->group(function(){
    Route::get('/show-house/user/{userId}', [HouseController::class, 'getHouseByUser']);
});