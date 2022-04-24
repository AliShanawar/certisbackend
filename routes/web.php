<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SupplierController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin-login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/Add-user', function () {
    return view('Add-user');
});
Route::get('/User-list', function () {
    return view('User-list');
});

Route::get('/Add-category', function () {
    return view('Add-category');
});
Route::get('category-list', function () {
    return view('category-list');
});
// subCategory
Route::get('/Sub-Category', function () {
    return view('Sub-Category');
});
Route::get('/Sub-list', function () {
    return view('SubCategory-list');
});
Route::get('edit-category', function () {
    return view('edit-category');
});
Route::get('/Doucment-list', function () {
    return view('Doucment-list');
});
Route::get('Supplier', function () {
    return view('Supplier');
});
Route::get('Edit-profile', function () {
    return view('Edit-profile/{id}');
});
// admin profile
Route::get('/Admin-profile', function () {
    return view('Admin-profile');
});
// add user

Route::get('/Add-user', [ClientController::class, 'index']);
Route::post('/Add-user', [ClientController::class, 'RegistarClient']);
// edit client
Route::get('/Edit-profile/{id}', [ClientController::class, 'edit']);
// add supplier
Route::get('/Supplier', [SupplierController::class, 'index']);
Route::post('/Supplier', [SupplierController::class, 'RegistarSupplier']);
// show user

Route::get('/User-list', [ClientController::class, 'show']);

// add category

Route::get('/Add-category', [CategoryController::class, 'index']);
Route::post('/Add-category', [CategoryController::class, 'AddCategory']);

// category list
Route::get('/category-list', [CategoryController::class, 'show']);
// delete category
Route::get('/delete-category/{id}', [CategoryController::class, 'DestroyCategory']);
// edit category
// Route::get('/edit/{id}', [CategoryController::class, 'showData']);
// Route::post('/edit', [CategoryController::class, 'update']);

// subcategory
Route::get('/Sub-Category', [SubCategoryController::class, 'show']);
Route::get('/Sub-list', [SubCategoryController::class, 'list']);
Route::post('/AddSubCategory', [SubCategoryController::class, 'AddSubCategory']);
Route::get('/delete-subcategory/{sub_categories_id}', [SubCategoryController::class, 'DestroyCategory']);

// suppliers
Route::get('/get-supplier/{user_id?}', [SupplierController::class, 'show']);
Route::get('/add-supplier', [SupplierController::class, 'index']);
Route::post('/addsupplier', [SupplierController::class, 'create']);
Route::get('/delete-supplier/{id}', [SupplierController::class, 'DestroyCategory']);
// add douc