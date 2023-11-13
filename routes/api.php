<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\StudentController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('data', [DummyController::class, 'getdata']);
// Route::get('list', [DummyController::class, 'listdata']);


Route::get('student', [StudentController::class, 'index']);
Route::post('student', [StudentController::class, 'store']);