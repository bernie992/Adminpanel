<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/employee', [App\Http\Controllers\HomeController::class, 'show_em'])->name('employee');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminlist'])->name('admin');
Route::get('/attendance', [App\Http\Controllers\HomeController::class, 'attendance_r'])->name('attendance');
Route::get('/leave', [App\Http\Controllers\HomeController::class, 'leave_r'])->name('leave');
