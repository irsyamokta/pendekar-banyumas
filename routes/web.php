<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneratePinController;
use App\Http\Controllers\Admin\InstrumenController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/', [GeneratePinController::class, 'store'])->name('generatePin');
    
    Route::get('/sdq', [DashboardController::class, 'sdq'])->name('sdq');
    Route::post('/sdq', [InstrumenController::class, 'storeSDQ'])->name('storeSDQ');
    Route::get('/sdq/{id}', [InstrumenController::class, 'viewSDQ'])->name('viewSDQ');
    Route::post('/sdq/{id}/edit', [InstrumenController::class, 'editSDQ'])->name('editSDQ');
    Route::get('/sdq/{id}/delete', [InstrumenController::class, 'deleteSDQ'])->name('deleteSDQ');

    Route::get('/srq', [DashboardController::class, 'srq'])->name('srq');
    Route::post('/srq', [InstrumenController::class, 'storeSRQ'])->name('storeSRQ');
    Route::get('/srq/{id}', [InstrumenController::class, 'viewSRQ'])->name('viewSRQ');
    Route::post('/srq/{id}/edit', [InstrumenController::class, 'editSRQ'])->name('editSRQ');
    Route::get('/srq/{id}/delete', [InstrumenController::class, 'deleteSRQ'])->name('deleteSRQ');

    Route::get('/report', [DashboardController::class, 'report'])->name('report');
});

require __DIR__.'/auth.php';
