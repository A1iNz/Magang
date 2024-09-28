<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProgrammerController;
use App\Http\Controllers\AnalisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\RequestController;
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
Route::post('logout', [AuthController::class,'logout'])->name('logout');
Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

Route::get('pengaduan', [PengaduanController::class,'index'])->name('pengaduan');

Route::get('laporan', [LaporanController::class,'index'])->name('laporan');
Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('settings', [SettingsController::class,'index'])->name('settings');
Route::get('profile', [ProfileController::class,'index'])->name('profile');
Route::get('notifikasi', [NotifikasiController::class,'index'])->name('notifikasi');
Route::get('request', [RequestController::class,'index'])->name('request');
Route::post('proses_request', [RequestController::class,'proses_request'])->name('req');

Route::post('/complaints', [ComplaintController::class, 'store'])->name('complaints.store');

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
