<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CourseCategoryController;
use App\Http\Controllers\admin\CourseSubCategoryController;


//Route::get('/', [FrontController::class, 'home'])->name('front.home');
//Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('front.about');
//Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('front.contact');

Route::as('front.')->group(function(){
    Route::controller(FrontController::class)->group(function(){
        Route::get('/','home')->name('home');
        Route::get('/about-us','aboutUs')->name('about');
        Route::get('/contact-us','contactUs')->name('contact');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//    Course Category Route
    Route::resource('course-categories', CourseCategoryController::class);
    //    Course Sub Category Route
    Route::resource('course-sub-categories', CourseSubCategoryController::class);
});
