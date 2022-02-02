<?php

use Illuminate\Support\Facades\Route;

// Administrator 
Route::get('/', [App\Http\Controllers\Admin\C_Auth::class, 'loginPage']);
Route::post('/admin/auth/login/process', [App\Http\Controllers\Admin\C_Auth::class, 'loginProcess']);

Route::get('/admin/main-app/dashboard', [App\Http\Controllers\Admin\C_Main_App::class, 'index']);