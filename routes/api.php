<?php

use App\Http\Controllers\API\ApiLoginController;
use App\Http\Controllers\API\ApiStudentController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/student', [ApiStudentController::class, 'index']);
Route::post('/login',[ApiLoginController::class,'login']);
