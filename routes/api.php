<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FunctionController;
use App\Http\Controllers\Api\AccessLevelController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/functions', FunctionController::class);

Route::get('/access-levels', [AccessLevelController::class, 'index']);
Route::get('/access-levels-with-functions', [AccessLevelController::class, 'indexWithFunctions']);
Route::post('/access-levels', [AccessLevelController::class, 'store']);
Route::get('/access-levels/{id}', [AccessLevelController::class, 'show']);
Route::delete('/access-levels/{id}', [AccessLevelController::class, 'destroy']);
Route::put('/access-levels/{id}', [AccessLevelController::class, 'update']);

Route::get('/functions', [FunctionController::class, 'index']);
Route::get('/functions/{id}', [FunctionController::class, 'show']);
Route::delete('/functions/{id}', [FunctionController::class, 'destroy']);
