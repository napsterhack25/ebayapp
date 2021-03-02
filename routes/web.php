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
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('admin/home', 'Admins\Backend\DashboardController@superAdmin')->name('admin.route');

Route::get('seller/home', 'Admins\Seller\DashboardController@seller')->name('seller.route');

Route::get('user/home', 'Admins\Buyer\DashboardController@buyer')->name('user.route');