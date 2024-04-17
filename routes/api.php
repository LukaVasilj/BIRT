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

Route::get('/orders',[App\Http\Controllers\OrdersController::class, 'index']);
Route::get('/orders/{id}',[App\Http\Controllers\OrdersController::class, 'show']);
Route::post('/orders',[App\Http\Controllers\OrdersController::class, 'store']);
Route::put('/orders/{id}',[App\Http\Controllers\OrdersController::class, 'update']);
Route::delete('/orders/{id}',[App\Http\Controllers\OrdersController::class, 'destroy']);

Route::get('/payments',[App\Http\Controllers\PaymentsController::class, 'index']);
Route::get('/payments/{checkNumber}',[App\Http\Controllers\PaymentsController::class, 'show']);
Route::post('/payments',[App\Http\Controllers\PaymentsController::class, 'store']);
Route::put('/payments/{checkNumber}',[App\Http\Controllers\PaymentsController::class, 'update']);
Route::delete('/payments/{checkNumber}',[App\Http\Controllers\PaymentsController::class, 'destroy']);

Route::get('/productlines',[App\Http\Controllers\ProductlinesController::class, 'index']);
Route::get('/productlines/{id}',[App\Http\Controllers\ProductlinesController::class, 'show']);
Route::post('/productlines',[App\Http\Controllers\ProductlinesController::class, 'store']);
Route::put('/productlines/{id}',[App\Http\Controllers\ProductlinesController::class, 'update']);
Route::delete('/productlines/{id}',[App\Http\Controllers\ProductlinesController::class, 'destroy']);
