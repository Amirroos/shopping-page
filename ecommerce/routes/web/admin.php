<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\productController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

// Route::middleware('auth')->group(function () {

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/',[HomeController::class,'index']);

// Route::get('/redirect',[HomeController::class,'redirect']);
// Route::middleware('auth')->group(function () {
    Route::get('dashboard',[AdminController::class,'index'])->name('admin-dashboard');
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

    //permission management
    Route::get('all-permissions',[PermissionController::class,'allPermission'])->name('all-permissions');

    Route::get('create-permission',[PermissionController::class,'createPermission'])->name('create-permission');
    Route::post('store-permission',[PermissionController::class,'storePermission'])->name('store-permission');


    Route::get('edit-permission/{id}',[PermissionController::class,'editPermission'])->name('edit-permission');
    Route::put('update-permission/{id}',[PermissionController::class,'updatePermission'])->name('update-permission');

    //roles managerent
    Route::get('all-roles',[RoleController::class,'allrole'])->name('all-roles');

    Route::get('create-role',[RoleController::class,'createrole'])->name('create-role');
    Route::post('store-role',[RoleController::class,'storerole'])->name('store-role');


    Route::get('edit-role/{id}',[RoleController::class,'editrole'])->name('edit-role');
    Route::put('update-role/{id}',[RoleController::class,'updaterole'])->name('update-role');

    //product 
    Route::get('all-products',[productController::class,'allproduct'])->name('all-products');

    Route::get('create-product',[productController::class,'createproduct'])->name('create-product');
    Route::post('store-product',[productController::class,'storeproduct'])->name('store-product');

    Route::get('edit-product/{id}',[productController::class,'editproduct'])->name('edit-product');
    Route::put('update-product/{id}',[productController::class,'updateproduct'])->name('update-product');

// });

?>