<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\KepanitiaanController;
use App\Http\Controllers\ReqNoSuratController;
use App\Http\Controllers\ReqTtdController;
use App\Http\Controllers\RabController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\DesainController;
use App\Http\Controllers\PublikasiController;
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

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'registerView'])->name('registerView');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::get('/bidang', [BidangController::class, 'show'])->name('bidang.show');
    Route::post('/bidang', [BidangController::class, 'store'])->name('bidang.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
    Route::get('/', [PagesController::class, 'indexAdmin'])->name('index');
    Route::get('/keuangan', [PagesController::class, 'keuangan'])->name('keuangan');
    
    Route::get('/keuangan/laporan/out', [PagesController::class, 'keuanganOut'])->name('keuangan/laporan/out');
    Route::get('/keuangan/laporan/in', [PagesController::class, 'keuanganIn'])->name('keuangan/laporan/in');
    Route::post('/keuangan/laporan/out', [\App\Http\Controllers\LapKeuanganOutController::class, 'store'])->name('store');
    Route::post('/keuangan/laporan/in', [\App\Http\Controllers\LapKeuanganInController::class, 'store'])->name('store');
    Route::put('keuanganOut.update', [\App\Http\Controllers\LapKeuanganOutController::class, 'update'])->name('keuanganOut.update');
    Route::put('keuanganIn.update', [\App\Http\Controllers\LapKeuanganInController::class, 'update'])->name('keuanganIn.update');

    Route::post('proker.store', [\App\Http\Controllers\ProgramKerjaController::class, 'store'])->name('proker.store');
    Route::put('proker.update', [\App\Http\Controllers\ProgramKerjaController::class, 'update'])->name('proker.update');

    Route::get('/persuratan', [PagesController::class, 'persuratan'])->name('persuratan');
    Route::get('/publikasi', [PagesController::class, 'publikasi'])->name('publikasi');
    Route::get('/profil', [PagesController::class, 'profil'])->name('profil');

    Route::get('/kepanitiaan/{id}', [KepanitiaanController::class, 'show'])->name('kepanitiaan');
    Route::post('kepanitiaan.store', [KepanitiaanController::class, 'store'])->name('kepanitiaan.store');

    Route::get('/keuangan/sptbh', [PagesController::class, 'keuanganSptbh'])->name('keuangan/sptbh');
    Route::get('/keuangan/rab/audit/{id}', [PagesController::class, 'keuanganRabAudit'])->name('keuangan/rab/audit');

    Route::get('/keuangan/laporan', [PagesController::class, 'keuanganLaporanKeuangan'])->name('keuangan/laporan');
    Route::get('/keuangan/rab', [RabController::class, 'show'])->name('keuangan/rab');
    Route::post('rab.store', [RabController::class, 'store'])->name('rab.store');
    Route::get('/keuangan/laporan/audit/{id}', [PagesController::class, 'keuanganLaporanKeuanganAudit'])->name('keuangan/laporan/audit');

    Route::get('/persuratan/ttd', [ReqTtdController::class, 'show'])->name('persuratan/ttd');
    Route::post('/persuratan/ttd', [ReqTtdController::class, 'upload'])->name('suratTtd.upload');
    Route::get('/persuratan/nomor', [ReqNoSuratController::class, 'show'])->name('persuratan/nomor');
    Route::post('/persuratan/nomor', [ReqNoSuratController::class, 'upload'])->name('suratNomor.upload');
    Route::put('suratNomor.update', [ReqNoSuratController::class, 'update'])->name('suratNomor.update');
    Route::put('suratTtd.update', [ReqTtdController::class, 'update'])->name('suratTtd.update');

    Route::get('/publikasi/pengajuan/buat', [PublikasiController::class, 'create'])->name('publicCreate.show');
    Route::post('/publikasi/pengajuan/buat', [PublikasiController::class, 'store'])->name('publicCreate.store');
    Route::get('/publikasi/desain', [DesainController::class, 'show'])->name('publikasi/desain');
    Route::post('/publikasi/desain/buat', [DesainController::class, 'store'])->name('desainCreate.store');
    Route::put('desainCreate.update', [DesainController::class, 'update'])->name('desainCreate.update');
    Route::get('/publikasi/desain/buat', [DesainController::class, 'create'])->name('desainCreate.show');
    Route::get('/publikasi/pengajuan', [PublikasiController::class, 'show'])->name('publikasi/pengajuan');
    Route::put('publikasi.update', [PublikasiController::class, 'update'])->name('publikasi.update');
});


