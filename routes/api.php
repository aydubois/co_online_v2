<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIUserController;
use App\Http\Controllers\APIRaceController;
use App\Http\Controllers\APICharacteristicController;
use App\Http\Controllers\AuthController;
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
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::get('me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::apiResource("users",APIUserController::class)->middleware('auth:sanctum');
Route::apiResource("races",APIRaceController::class);
Route::apiResource("characteristics",APICharacteristicController::class);

