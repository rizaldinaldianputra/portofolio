<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    BannerController,
    ClientController,
    ProjectController,
    ClientReviewController,
    ServiceController,
    SocialMediaController
};

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::apiResource('banners', BannerController::class);
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('reviews', ClientReviewController::class);
    Route::apiResource('services', ServiceController::class);
    Route::apiResource('socials', SocialMediaController::class);
});
