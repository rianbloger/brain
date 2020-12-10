<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, DashboardController};
use App\Http\Controllers\Band\BandController;

Auth::routes();

Route::get('/', HomeController::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('bands')->group(function () {
        Route::get('create', [BandController::class, 'create'])->name('bands.create');
        Route::post('create', [BandController::class, 'store']);

        Route::get('table', [BandController::class, 'table'])->name('bands.table');
        Route::get('{band:slug}/edit', [BandController::class, 'edit'])->name('bands.edit');
        Route::put('{band:slug}/edit', [BandController::class, 'update']);
    });
});
