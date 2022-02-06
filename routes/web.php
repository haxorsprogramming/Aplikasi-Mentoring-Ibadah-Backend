<?php

use Illuminate\Support\Facades\Route;

// Administrator 
Route::get('/', [App\Http\Controllers\Admin\C_Auth::class, 'loginPage']);
Route::post('/admin/auth/login/process', [App\Http\Controllers\Admin\C_Auth::class, 'loginProcess']);
Route::get('/admin/auth/logout', [App\Http\Controllers\Admin\C_Auth::class, 'logout']);

Route::get('/admin/main-app/dashboard', [App\Http\Controllers\Admin\C_Main_App::class, 'index']);
Route::get('/admin/main-app/beranda', [App\Http\Controllers\Admin\C_Main_App::class, 'beranda']);

// mentor 
Route::get('/admin/main-app/mentor/list', [App\Http\Controllers\Admin\C_Mentor::class, 'mentorPage']);
Route::post('/admin/main-app/mentor/tambah/proses', [App\Http\Controllers\Admin\C_Mentor::class, 'prosesTambahMentor']);
Route::post('/admin/main-app/mentor/get-data', [App\Http\Controllers\Admin\C_Mentor::class, 'getDataMentor']);
Route::post('/admin/main-app/mentor/edit/proses', [App\Http\Controllers\Admin\C_Mentor::class, 'prosesEditMentor']);
Route::post('/admin/main-app/mentor/hapus/proses', [App\Http\Controllers\Admin\C_Mentor::class, 'prosesHapusMentor']);
// binaan 
Route::get('/admin/main-app/binaan/list', [App\Http\Controllers\Admin\C_Binaan::class, 'binaanPage']);
Route::post('/admin/main-app/binaan/tambah/proses', [App\Http\Controllers\Admin\C_Binaan::class, 'prosesTambahBinaan']);
Route::post('/admin/main-app/binaan/get-data', [App\Http\Controllers\Admin\C_Binaan::class, 'getDataBinaan']);
Route::post('/admin/main-app/binaan/update/proses', [App\Http\Controllers\Admin\C_Binaan::class, 'prosesUpdateBinaan']);
Route::post('/admin/main-app/binaan/hapus/proses', [App\Http\Controllers\Admin\C_Binaan::class, 'prosesHapusBinaan']);
// kelompok binaan 
Route::get('/admin/main-app/kelompok-binaan/list', [App\Http\Controllers\Admin\C_Kelompok_Binaan::class, 'kelompokBinaanPage']);
Route::post('/admin/main-app/kelompok-binaan/tambah/proses', [App\Http\Controllers\Admin\C_Kelompok_Binaan::class, 'prosesTambahKelompokBinaan']);
Route::get('/admin/main-app/kelompok-binaan/{idKelompok}/detail', [App\Http\Controllers\Admin\C_Kelompok_Binaan::class, 'detailKelompokBinaan']);
Route::post('/admin/main-app/kelompok-binaan/tambah-anggota/proses', [App\Http\Controllers\Admin\C_Kelompok_Binaan::class, 'prosesTambahAnggota']);
Route::post('/admin/main-app/kelompok-binaan/hapus-anggota/proses', [App\Http\Controllers\Admin\C_Kelompok_Binaan::class, 'prosesHapusAnggota']);
Route::post('/admin/main-app/kelompok-binaan/hapus/proses', [App\Http\Controllers\Admin\C_Kelompok_Binaan::class, 'prosesHapusKelompokBinaan']);
// jenis amalan 
Route::get('/admin/main-app/jenis-amalan/list', [App\Http\Controllers\Admin\C_Jenis_Amalan::class, 'jenisAmalanPage']);
Route::post('/admin/main-app/jenis-amalan/tambah/proses', [App\Http\Controllers\Admin\C_Jenis_Amalan::class, 'prosesTambahAmalan']);
Route::post('/admin/main-app/jenis-amalan/data/get', [App\Http\Controllers\Admin\C_Jenis_Amalan::class, 'getDataAmalan']);
Route::post('/admin/main-app/jenis-amalan/update/proses', [App\Http\Controllers\Admin\C_Jenis_Amalan::class, 'prosesUpdateAmalan']);
Route::post('/admin/main-app/jenis-amalan/hapus/proses', [App\Http\Controllers\Admin\C_Jenis_Amalan::class, 'prosesHapusAmalan']);

// API 
Route::post('/api/kegiatan/tambah/proses', [App\Http\Controllers\Api\C_Api::class, 'prosesTambahKegiatan']);
Route::post('/api/kegiatan/pendaftaran/proses', [App\Http\Controllers\Api\C_Api::class, 'prosesPendaftaranKegiatan']);
Route::post('/api/kegiatan/amalan/selesai/proses', [App\Http\Controllers\Api\C_Api::class, 'konfirmasiAmalanBinaanSelesai']);
Route::post('/api/kegiatan/amalan/reject/proses', [App\Http\Controllers\Api\C_Api::class, 'konfirmasiReject']);

Route::get('/api/pdf/export/{idKegiatan}', [App\Http\Controllers\Api\C_Api::class, 'exportPdf']);