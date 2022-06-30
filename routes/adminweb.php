<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\CardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SubcategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Subcategory;




/*
|--------------------------------------------------------------------------
|Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('admin/login',[LoginController::class,'adminLogin'])->name('admin.login');

Route::resource('post',PostController::class);
Route::resource('category',CategoryController::class);
Route::resource('subcategory',SubcategoryController::class);






