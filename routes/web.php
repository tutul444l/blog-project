<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\ForntendController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/back', [App\Http\Controllers\BackendController::class, 'index'])->name('home');
// Route::get('/font', [App\Http\Controllers\ForntendController::class, 'index'])->name('home');

// Route::get('Category', [App\Http\Controllers\CategoryController::class, 'AddCat'])->name('store.category');


