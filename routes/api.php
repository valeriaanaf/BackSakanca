<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HeroController;
use Illuminate\Support\Facades\Route;

// Route Autentikasi Admin (Bawaan Tim yang Sudah Ada)
Route::prefix('v1')->group(function () {
    // Auth
    Route::prefix('auth')->group(function () {
        Route::post('/login', [AuthController::class, 'login']);
        Route::middleware('auth:sanctum')->group(function () {
            Route::post('/logout', [AuthController::class, 'logout']);
        });
    });

    Route::get('/ping', fn () => response()->json(['status' => 'ok']));  // Health Check
    Route::get('/hero', [HeroController::class, 'index']);             // Public - tidak perlu token
    Route::middleware('auth:sanctum')->prefix('admin')->group(function () { // Admin wajib token sanctum
        Route::put('/hero/{hero}', [HeroController::class, 'update']);
    });
});
