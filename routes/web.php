<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, DashboardController};

Auth::routes();

Route::get('/', HomeController::class)->name('home');

Route::get('dashboard', DashboardController::class)->name('dashboard');
