<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home page melalui controller supaya bisa kirim data
Route::get('/', [HomeController::class, 'index'])->name('home');

// Portfolio jika pakai halaman statis tanpa data, tetap bisa pakai view
Route::view('/portfolio', 'portfolio')->name('portfolio');

// Contact page
Route::get('/contact', function() {
    return view('contact');
})->name('contact');

// Submit contact form
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
