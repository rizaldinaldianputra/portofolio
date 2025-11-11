<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use L5Swagger\Http\Controllers\SwaggerController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Route utama Swagger UI
Route::get('/api/documentation', [SwaggerController::class, 'api'])->name('swagger.documentation');

// Optional redirect dari /api/docs
Route::get('/api/docs', function () {
    return redirect()->route('swagger.documentation');
});
