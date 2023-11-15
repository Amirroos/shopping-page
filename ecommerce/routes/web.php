<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/',[HomeController::class,'index']);

Route::get('/redirect',[HomeController::class,'redirect']);
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('all-categories',[CategoryController::class,'allcategories'])->name('all-categories');
    Route::get('create-categories',[CategoryController::class,'createcategories'])->name('create-categories');
    Route::post('store-category',[CategoryController::class,'storecategory'])->name('store-category');
    Route::get('category-edit/{id}',[CategoryController::class,'categoryedit'])->name('category-edit');
    Route::put('category-update/{id}',[CategoryController::class,'categoryUpdate'])->name('category-update');
    Route::delete('/category-delete/{id}',[CategoryController::class,'deletecategory'])->name('delete-category');
});

require __DIR__.'/auth.php';
