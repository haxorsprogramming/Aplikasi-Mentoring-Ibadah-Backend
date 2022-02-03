<?php

use Illuminate\Support\Facades\Route;

// Administrator 
Route::get('/', [App\Http\Controllers\Admin\C_Auth::class, 'loginPage']);
Route::post('/admin/auth/login/process', [App\Http\Controllers\Admin\C_Auth::class, 'loginProcess']);

Route::get('/admin/main-app/dashboard', [App\Http\Controllers\Admin\C_Main_App::class, 'index']);
Route::get('/admin/main-app/beranda', [App\Http\Controllers\Admin\C_Main_App::class, 'beranda']);

// mentor 
Route::get('/admin/main-app/mentor/list', [App\Http\Controllers\Admin\C_Mentor::class, 'mentorPage']);
Route::post('/admin/main-app/mentor/tambah/proses', [App\Http\Controllers\Admin\C_Mentor::class, 'prosesTambahMentor']);
Route::post('/admin/main-app/mentor/get-data', [App\Http\Controllers\Admin\C_Mentor::class, 'getDataMentor']);
Route::post('/admin/main-app/mentor/edit/proses', [App\Http\Controllers\Admin\C_Mentor::class, 'prosesEditMentor']);
Route::post('/admin/main-app/binaan/hapus/proses', [App\Http\Controllers\Admin\C_Mentor::class, 'prosesHapusMentor']);
// Binaan 
Route::get('/admin/main-app/binaan/list', [App\Http\Controllers\Admin\C_Binaan::class, 'binaanPage']);
Route::post('/admin/main-app/binaan/tambah/proses', [App\Http\Controllers\Admin\C_Binaan::class, 'prosesTambahBinaan']);