<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardTeacherController;
use App\Http\Controllers\DetailKelasController;
use App\Http\Controllers\DetailMapelController;
use App\Http\Controllers\DetailSiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NilaiContoller;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekapAbsensiController;
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
    Route::post('/presensi', [PresensiController::class, 'store'])->name('presensi.store');

    Route::get('/tugas', [TugasController::class, 'index'])->name('tugas.index');

    Route::get('/tugas/submit', [TugasSubmitController::class, 'index'])->name('tugasSubmit.index');

    Route::get('/dashboard-guru', [DashboardTeacherController::class, 'index'])->name('dashboardTeacher.index');

    Route::get('/nilai', [NilaiContoller::class, 'index'])->name('nilai.index');

    Route::get('/rekap-absensi', [RekapAbsensiController::class, 'index'])->name('rekapAbsensi.index');

    Route::get('/detail-kelas', [DetailKelasController::class, 'index'])->name('detailKelas.index');

    Route::get('/detail-siswa', [DetailSiswaController::class, 'index'])->name('detailSiswa.index');

    Route::get('/detail-mapel', [DetailMapelController::class, 'index'])->name('detailMapel.index');
});


