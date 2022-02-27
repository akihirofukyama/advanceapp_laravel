<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Stamp_AttendanceController;
use App\Http\Controllers\Stamp_RestController;


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


Route::get('/', [RegisterController::class, 'index'])->;

Route::post('/', [RegisterController::class, 'store']);

Route::get('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::post('/stamp/start_attendance', [Stamp_AttendanceController::class, 'start_attendance']);

Route::post('/stamp/end_attendance', [Stamp_AttendanceController::class, 'end_attendance']);

Route::post('/stamp/start_rest', [Stamp_RestController::class, 'create_start_rest']);

Route::post('/stamp/end_rest', [Stamp_RestController::class, 'create_end_rest']);

Route::post('/date', [DateController::class, 'index']);

