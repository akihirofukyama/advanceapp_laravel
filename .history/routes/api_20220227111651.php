<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestController;

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

Route::apiResource('/v1/worker', WorkerController::class);

Route::apiResource('/v1/attendance', AttendanceController::class);

Route::apiResource('/v1/rest', RestController::class);

Route::get('/', [RegisterController::class, 'index']);

Route::post('/', [RegisterController::class, 'store']);

Route::get('/login', [RegisterController::class, 'index']);

