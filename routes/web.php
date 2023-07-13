<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ScoutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superadmin')->middleware('superadmin');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher')->middleware('teacher');
Route::get('/scout', [ScoutController::class, 'index'])->name('scout')->middleware('scout');
Route::get('/student', [StudentController::class, 'index'])->name('student')->middleware('student');
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('user');
