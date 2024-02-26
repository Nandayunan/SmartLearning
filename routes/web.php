<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardTeacherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\TugasSubmitController;
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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard.index');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LogoutController::class, 'store'])->name('logout.store');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

    Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');

    Route::get('/tugas', [TugasController::class, 'index'])->name('tugas.index');

    Route::get('/tugas/submit', [TugasSubmitController::class, 'index'])->name('tugasSubmit.index');

    Route::get('/dashboard-guru', [DashboardTeacherController::class, 'index'])->name('dashboardTeacher.index');
});
