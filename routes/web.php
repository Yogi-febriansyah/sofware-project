<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JudulController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DospemController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DataAkunController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;


Route::middleware(['guest'])->group(function() {
    // Login
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware(['auth'])->group(function() {
    // mahasiswa
    Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'index'])->middleware('akses:mahasiswa');
    Route::get('/mahasiswa/judul', [JudulController::class, 'index'])->middleware('akses:mahasiswa');
    Route::post('/mahasiswa/skripsi', [JudulController::class, 'tambah']);
    Route::get('/mahasiswa/edit/{id}', [JudulController::class, 'edit'])->middleware('akses:mahasiswa');
    Route::post('/mahasiswa/update/{id}', [JudulController::class, 'update']);
    Route::get('/mahasiswa/detail/{id}', [JudulController::class, 'detail'])->middleware('akses:mahasiswa');
    Route::get('/mahasiswa/delete/{id}', [JudulController::class, 'delete'])->middleware('akses:mahasiswa');
    Route::get('/mahasiswa/dokumen', [DokumenController::class, 'index'])->middleware('akses:mahasiswa');
    Route::post('/mahasiswa/dokumentambah', [DokumenController::class, 'tambah']);
    Route::get('/mahasiswa/dokumendetail/{id}', [DokumenController::class, 'detail'])->middleware('akses:mahasiswa');
    Route::get('/mahasiswa/dokumenedit/{id}', [DokumenController::class, 'edit'])->middleware('akses:mahasiswa');
    Route::post('/mahasiswa/dokumenupdate/{id}', [DokumenController::class, 'update']);
    Route::get('/mahasiswa/dokumenhapus/{id}', [DokumenController::class, 'destroy'])->middleware('akses:mahasiswa');
    Route::get('/mahasiswa/magang', [MagangController::class, 'index'])->middleware('akses:mahasiswa');
    Route::post('/mahasiswa/tambahmagang', [MagangController::class, 'tambah']);
    Route::get('/mahasiswa/editmagang/{id}', [MagangController::class, 'edit'])->middleware('akses:mahasiswa');
    Route::post('/mahasiswa/updatemagang/{id}', [MagangController::class, 'update']);
    Route::get('/mahasiswa/deletemagang/{id}', [MagangController::class, 'delete'])->middleware('akses:mahasiswa');

    // dospem
    Route::get('/dospem/dashboard', [DospemController::class, 'index'])->middleware('akses:dospem');
    Route::get('/dospem/judul', [DospemController::class, 'judul'])->middleware('akses:dospem');
    Route::get('/dospem/detailjudul/{id}', [DospemController::class, 'detail'])->middleware('akses:dospem');
    Route::post('/dospem/updatejudul/{id}', [DospemController::class, 'update']);
    Route::get('/dospem/revisijudul/{id}', [DospemController::class, 'revisi'])->middleware('akses:dospem');
    Route::post('/dospem/ubah/{id}', [DospemController::class, 'catatan']);
    Route::get('/dospem/data', [DospemController::class, 'data'])->middleware('akses:dospem');
    Route::get('/dospem/datajudul/{id}', [DospemController::class, 'data_judul'])->middleware('akses:dospem');
    Route::get('/dospem/dokumen', [DospemController::class, 'dokumen'])->middleware('akses:dospem');
    Route::get('/dospem/detaildokumen/{id}', [DospemController::class, 'detail_dokumen'])->middleware('akses:dospem');
    Route::get('/dospem/catatan/{id}', [DospemController::class, 'kritik'])->middleware('akses:dospem');
    Route::post('/dospem/catatan/{id}', [DospemController::class, 'catatan_dokumen']);
    Route::get('/dospem/magang', [MagangController::class, 'magang'])->middleware('akses:dospem');
    Route::get('/dospem/detailmagang/{id}', [MagangController::class, 'detail'])->middleware('akses:dospem');
    Route::post('/dospem/validasi/{id}', [MagangController::class, 'validasi']);

    // operator
    Route::get('/operator/dashboard', [OperatorController::class, 'index'])->middleware('akses:operator');
    Route::get('/operator/dataAkun', [DataAkunController::class, 'index'])->middleware('akses:operator');
    Route::post('/operator/tambahdospem', [DataAkunController::class, 'dosen']);
    Route::post('/operator/tambahmhs', [DataAkunController::class, 'mahasiswa']);
    Route::get('/operator/datamhs', [OperatorController::class, 'data'])->middleware('akses:operator');
    Route::get('/operator/judul/{id}', [OperatorController::class, 'judul'])->middleware('akses:operator');
    Route::get('/operator/dokumenmhs', [OperatorController::class, 'dokumen'])->middleware('akses:operator');
    Route::get('/operator/dokumen/{id}', [OperatorController::class, 'data_dokumen'])->middleware('akses:operator');
    Route::get('/operator/magang', [MagangController::class, 'mahasiswa_magang'])->middleware('akses:operator');
    Route::get('/operator/detailmagang/{id}', [MagangController::class, 'magang_detail'])->middleware('akses:operator');
    Route::get('/operator/edit/{id}', [DataAkunController::class, 'edit'])->middleware('akses:operator');
    Route::post('/operator/edituser/{id}', [DataAkunController::class, 'update']);
    Route::get('/operator/hapus/{id}', [DataAkunController::class, 'delete'])->middleware('akses:operator');

    // logout
    Route::get('/logout', [LoginController::class, 'logout']);
});

