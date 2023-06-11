<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', function () {
    return view('home');
});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    //Categories
    Route::get('categories-list', [AdminController::class, 'categories'])->name('categories-list');
    Route::get('categories-grid', [AdminController::class, 'categories'])->name('categories-grid');
    Route::get('create-category', [CategoryController::class, 'create'])->name('category-create');
    Route::post('store-category', [CategoryController::class, 'store'])->name('category-store');
    



    //Courses
    Route::get('courses-list', [AdminController::class, 'courses'])->name('courses-list');
    Route::get('courses-grid', [AdminController::class, 'courses'])->name('courses-grid');
    Route::get('create-course', [CourseController::class, 'create'])->name('course-create');
    Route::post('store-course', [CourseController::class, 'store'])->name('course-store');

    //Tags
    Route::get('create-tag', [TagController::class, 'create'])->name('create-tag');
    Route::post('store-tag', [TagController::class, 'store'])->name('store-tag');
    Route::get('tags-table', [TagController::class, 'index'])->name('tags-table');
    Route::get('tags/{tag}', [TagController::class, 'show'])->name('tag');
    Route::get('edit-tag/{tag}', [TagController::class, 'edit'])->name('tag-edit');
    Route::patch('update-tag/{tag}', [TagController::class, 'update'])->name('tag-update');
    Route::delete('deltag/{tag}', [TagController::class, 'destroy'])->name('tag-delete');

});