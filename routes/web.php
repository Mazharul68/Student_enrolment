<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\LoginController;

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
    return view('welcome');
});

Auth::routes();
Route::get('/',[IndexController::class,'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
///Admin Login Part
Route::get('admin/home',[AdminController::class,'index']);
Route::get('admin',[LoginController::class,'showLoginForm'])->name('login.admin');
Route::post('admin',[LoginController::class,'login']);
//My Profile
Route::get('admin/my-profile',[AdminController::class,'myProfile'])->name('my-profile');
Route::get('admin/edit-profile',[AdminController::class,'editProfile'])->name('edit.profile');
Route::post('admin/update-profile',[AdminController::class,'updateProfile'])->name('update.profile');
Route::get('admin/change-password',[AdminController::class,'changePossowrd'])->name('change.password');
Route::post('admin/update-password',[AdminController::class,'updatePassword'])->name('update.password');
