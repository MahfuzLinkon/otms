<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\FrontController;



//Route::get('/', [FrontController::class, 'home'])->name('front.home');
//Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('front.about');
//Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('front.contact');

Route::as('front.')->group(function(){
    Route::controller(FrontController::class)->group(function(){
        Route::get('/','home')->name('home');
        Route::get('/about-us','aboutUs')->name('about');
        Route::get('/contact-us','contactUs')->name('contact');
        Route::get('/category-course/{id}','categoryCourse')->name('category-course');
    });
});


