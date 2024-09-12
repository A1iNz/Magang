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

// metode nya get lalu masukkan namespace AuthController 
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller
Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
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