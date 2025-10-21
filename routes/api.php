<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AccessLevelController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/access-levels', [AccessLevelController::class, 'index']);
Route::get('/access-levels-with-functions', [AccessLevelController::class, 'indexWithFunctions']);
Route::post('/access-levels', [AccessLevelController::class, 'store']);
Route::get('/access-levels/{id}', [AccessLevelController::class, 'show']);