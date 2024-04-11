<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, API!']);
});

Route::get('/games',[App\Http\Controllers\GameController::class, 'index']);
Route::get('/games/{id}',[App\Http\Controllers\GameController::class, 'show']);
Route::post('/games',[App\Http\Controllers\GameController::class, 'store']);
Route::put('/games/{id}',[App\Http\Controllers\GameController::class, 'update']);
Route::delete('/games/{id}',[App\Http\Controllers\GameController::class, 'destroy']);
