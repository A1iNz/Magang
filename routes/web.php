<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProgrammerController;
use App\Http\Controllers\AnalisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HardwareController;
use App\Models\User;
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
    return view('auth.login');
});

Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:staff']], function () {
        Route::resource('staff', StaffController::class);
    });
    Route::group(['middleware' => ['cek_login:analis']], function () {
        Route::resource('analis', AnalisController::class);
    });
    Route::group(['middleware' => ['cek_login:programmer']], function () {
        Route::resource('programmer', ProgrammerController::class);
    });
    Route::group(['middleware' => ['cek_login:hardware']], function () {
        Route::resource('hardware', HardwareController::class);
    });
});