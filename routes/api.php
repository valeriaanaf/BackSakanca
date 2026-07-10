<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\GalleryItemController;
use App\Http\Controllers\Api\HeroController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\SiteSettingController;
use App\Http\Controllers\Api\TeamMemberController;
use App\Http\Controllers\Api\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    // --- 1. ENDPOINT AUTHENTIKASI ---
    Route::prefix('auth')->group(function () {
        Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1');
        Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
    });
    Route::get('/ping', fn () => response()->json(['status' => 'ok']));

    // --- 2. ENDPOINT PUBLIC (Akses Tanpa Token dari Frontend) ---
    Route::get('/hero', [HeroController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/team-members', [TeamMemberController::class, 'index']);
    Route::get('/team-members/{id}', [TeamMemberController::class, 'show']);
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/gallery-items', [GalleryItemController::class, 'index']);
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/testimonials', [TestimonialController::class, 'index']);
    Route::get('/settings', [SiteSettingController::class, 'index']);
    Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:5,1');

    // --- 3. ENDPOINT ADMIN (Akses Wajib Token Sanctum via Dashboard/Postman) ---
    Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
        Route::put('/hero/{hero}', [HeroController::class, 'update']);
        Route::put('/about/{about}', [AboutController::class, 'update']);
        Route::put('/settings', [SiteSettingController::class, 'update']);

        // CRUD Data Dinamis Konten
        Route::apiResource('team-members', TeamMemberController::class)->except(['index', 'show']);
        Route::apiResource('services', ServiceController::class)->except(['index']);
        Route::apiResource('gallery-items', GalleryItemController::class)->except(['index']);
        Route::apiResource('projects', ProjectController::class)->except(['index']);
        Route::apiResource('testimonials', TestimonialController::class)->except(['index']);

        // Manajemen Pesan Masuk
        Route::get('/contact-messages', [ContactController::class, 'index']);
        Route::patch('/contact-messages/{id}/read', [ContactController::class, 'markAsRead']);
    });
});
