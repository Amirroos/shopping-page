<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

// Route::middleware('auth')->group(function () {

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/',[HomeController::class,'index']);

// Route::get('/redirect',[HomeController::class,'redirect']);
// Route::middleware('auth')->group(function () {
    Route::get('dashboard',[AdminController::class,'index']);
    Route::get('all-categories  ',[CategoryController::class,'allcategories'])->name('all-categories');
    Route::get('create-categories',[CategoryController::class,'createcategories'])->name('create-categories');
    Route::post('store-category',[CategoryController::class,'storecategory'])->name('store-category');
    Route::get('category-edit/{id}',[CategoryController::class,'categoryedit'])->name('category-edit');
    Route::put('category-update/{id}',[CategoryController::class,'categoryUpdate'])->name('category-update');
    Route::delete('/category-delete/{id}',[CategoryController::class,'deletecategory'])->name('delete-category');
    // user management
    Route::get('all-user',[UserController::class,'allUsers'])->name('all-users');
    Route::get('create-user',[UserController::class,'createUser'])->name('create-user');
    Route::post('store-user',[UserController::class,'storeUser'])->name('store-user');

    Route::get('edit-user/{id}',[UserController::class,'editUser'])->name('edit-user');
    Route::put('update-user/{id}',[UserController::class,'updateUser'])->name('update-user');

    Route::delete('user-delete/{id}',[UserController::class,'deleteUser']);
// });

?>