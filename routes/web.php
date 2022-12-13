<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;

Route::get('/', [FrontController::class, 'home'])->name('front.home');
Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('front.about');
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('front.contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
