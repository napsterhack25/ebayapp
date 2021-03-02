<?php

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
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'authenticationValidateAdmin'])->name('admin.route')->middleware('authentic');

Route::get('seller/home', [App\Http\Controllers\HomeController::class, 'authenticationValidateSeller'])->name('seller.route')->middleware('authentic');

Route::get('user/home', [App\Http\Controllers\HomeController::class, 'authenticationValidateUser'])->name('user.route')->middleware('authentic');