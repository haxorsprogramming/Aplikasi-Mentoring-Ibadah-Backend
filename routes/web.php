<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\C_Auth;

Route::get('/', [C_Auth::class, 'loginPage']);
