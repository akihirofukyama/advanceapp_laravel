<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendancesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/register', [AttendancesController::class, 'register'])->name('register');

Route::get('/login', [AttendancesController::class, 'login'])->name('login');

Route::get('/date', [AttendancesController::class, 'date'])->name('date');

Route::get('/stamp', [AttendancesController::class, 'stamp'])->name('stamp');
