<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CourseCategoryController;
use App\Http\Controllers\admin\CourseSubCategoryController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\UserController;

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
    //    Course Route
    Route::resource('courses', CourseController::class);
    Route::get('/get-subcategory-category-wise', [CourseController::class, 'getSubCategory'])->name('get-subcategory-category-wise');
    Route::get('/course-status/{id}', [CourseController::class, 'coursesStatus'])->name('courses.status');

    Route::resource('users', UserController::class);


});
