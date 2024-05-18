<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//เฉพาะแอดมิน
Route::middleware(['web', 'is_admin'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'showuser'])->name('admin.home');
    Route::get('/admin/userdetail/{id}', [AdminController::class, 'userdetail'])->name('userdetail');
    Route::get('/admin/createuser', [RegisterController::class, 'showRegistrationForm'])->name('createuser');
    Route::post('/employee/detail/{id}', [RegisterController::class, 'updateuser'])->name('updateuser');
    Route::get('/admin/historyuser/{id}', [AdminController::class, 'historyuser'])->name('historyuser');
});
//สำหรับพนักงานและแอดมิน
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/employee/home', [UserController::class, 'homepage'])->name('homepage');   //หน้าแรกของพนักงาน
    Route::get('/employee/formcer', [UserController::class, 'showform'])->name('formcer');
    Route::post('/employee/formcer/save', [UserController::class, 'savedata'])->name('savedata');
    Route::get('/employee/detail/{id}', [UserController::class, 'detail'])->name('detail');
    Route::get('/employee/detail/file/{id}', [UserController::class, 'printpdf'])->name('printpdf');
});
