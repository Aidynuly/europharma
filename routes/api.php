<?php

use App\Http\Controllers\Api\V1\CarController;
use App\Http\Controllers\Api\V1\CityController;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\OrderController;
use App\Http\Controllers\Api\V1\PositionController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::post('/register',    [UserController::class, 'registerUser']);
    Route::post('/register-password', [UserController::class, 'passwordUser']);
    Route::post('/register-employee', [EmployeeController::class, 'register']);
    Route::post('/login',       [UserController::class, 'loginUser']);
    Route::post('/login-employee',       [EmployeeController::class, 'login']);
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('/register-confirm', [UserController::class, 'registerConfirm']);
        Route::post('/verify',      [UserController::class, 'verify']);
        Route::post('/logout',      [UserController::class, 'logout']);
    });
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('profile',       [UserController::class, 'getProfile']);
        Route::get('orders/accepted', [OrderController::class, 'acceptedOrders']);
        Route::post('orders',       [OrderController::class, 'getOrder']);      //city_id required
        Route::post('order/accept', [OrderController::class, 'acceptOrder']);
        Route::post('order/points', [OrderController::class, 'getPoint']);
        Route::post('order/point/products', [OrderController::class, 'getProduct']);
        Route::post('order/point/product/finish', [OrderController::class, 'pointFinish']);
        // last updates from 26.01
        Route::post('order/history', [OrderController::class, 'historyOrder']);
        Route::get('profile/documents', [UserController::class, 'getDocument']);
    });
    Route::get('/cities',       [CityController::class, 'getCity']);
    Route::get('/cars',         [CarController::class, 'getCar']);
    Route::get('/positions',    [PositionController::class, 'getPosition']);
});
