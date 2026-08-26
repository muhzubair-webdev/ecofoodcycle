<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/migrate-db', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return 'Migrasi Sukses! Output: ' . Artisan::output();
    } catch (\Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});

Route::get('/login', function () {
    return view('auth.login');
});

// Mock Routes for Warga
Route::prefix('warga')->group(function () {
    Route::get('/dashboard', function () { return view('warga.dashboard'); });
    Route::get('/form-pengajuan', function () { return view('warga.form_pengajuan'); });
    Route::get('/tukar-poin', function () { return view('warga.tukar_poin'); });
    Route::get('/riwayat', function () { return view('warga.riwayat'); });
});

// Mock Routes for Petugas
Route::prefix('petugas')->group(function () {
    Route::get('/dashboard', function () { return view('petugas.dashboard'); });
    Route::get('/form-pupuk', function () { return view('petugas.form_pupuk'); });
});

// Mock Routes for Petani
Route::prefix('petani')->group(function () {
    Route::get('/dashboard', function () { return view('petani.dashboard'); });
    Route::get('/form-panen', function () { return view('petani.form_panen'); });
    Route::get('/ambil-pupuk', function () { return view('petani.ambil_pupuk'); });
});

// Mock Routes for Admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); });
    Route::get('/pengguna', function () { return view('admin.pengguna'); });
    Route::get('/pengajuan-sampah', function () { return view('admin.pengajuan_sampah'); });
    Route::get('/stok-pupuk', function () { return view('admin.stok_pupuk'); });
    Route::get('/hasil-panen', function () { return view('admin.hasil_panen'); });
    Route::get('/tambah-pengguna', function () { return view('admin.tambah_pengguna'); });
});
