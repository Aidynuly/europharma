<?php

use App\Http\Controllers\v1\CarController;
use App\Http\Controllers\v1\CityController;
use App\Http\Controllers\v1\OrderController;
use App\Http\Controllers\V1\UserController;
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
    Route::post('/register-confirm', [UserController::class, 'registerConfirm']);
    Route::post('/login',       [UserController::class, 'loginUser']);
    Route::post('/verify',      [UserController::class, 'verify']);
    Route::post('/logout',      [UserController::class, 'logout']);         //do it


    Route::get('/cities',       [CityController::class, 'getCity']);
    Route::get('/cars',         [CarController::class, 'getCar']);

    Route::middleware(['check.auth'])->group(function () {
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
});
