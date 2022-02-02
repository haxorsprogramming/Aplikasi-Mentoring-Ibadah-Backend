<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\C_Auth::class, 'loginPage']);
