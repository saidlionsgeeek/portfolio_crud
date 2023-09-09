<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class , "index"])->name("home.index");
Route::get('/admin',[AdminController::class , "index"])->name("admin.index");
Route::put('/admin/home/{home}',[AdminController::class , "update"])->name("home.update");
Route::put('/admin/about/{about}',[AdminController::class , "update_about"])->name("about.update");
Route::put('/admin/skill/{skill}',[AdminController::class , "update_skill"])->name("skill.update");
