<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneratePinController;
use App\Http\Controllers\Admin\InstrumenController;
use App\Http\Controllers\Client\HomepageController;
use App\Http\Controllers\Client\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\FormDataMiddleware;

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/', [GeneratePinController::class, 'store'])->name('generatePin');
    
    Route::get('/sdq', [DashboardController::class, 'sdq'])->name('sdq');
    Route::get('/sdq/first', [DashboardController::class, 'sdqFirst'])->name('sdqFirst');
    Route::post('/sdq/first', [InstrumenController::class, 'storeSDQFirst'])->name('storeSDQFirst');
    Route::get('/sdq/first/{id}', [InstrumenController::class, 'viewSDQFirst'])->name('viewSDQFirst');
    Route::post('/sdq/first/{id}/edit', [InstrumenController::class, 'editSDQFirst'])->name('editSDQFirst');
    Route::get('/sdq/first/{id}/delete', [InstrumenController::class, 'deleteSDQFirst'])->name('deleteSDQFirst');

    Route::get('/sdq/second', [DashboardController::class, 'sdqSecond'])->name('sdqSecond');
    Route::post('/sdq/second', [InstrumenController::class, 'storeSDQSecond'])->name('storeSDQSecond');
    Route::get('/sdq/second/{id}', [InstrumenController::class, 'viewSDQSecond'])->name('viewSDQSecond');
    Route::post('/sdq/second/{id}/edit', [InstrumenController::class, 'editSDQSecond'])->name('editSDQSecond');
    Route::get('/sdq/second/{id}/delete', [InstrumenController::class, 'deleteSDQSecond'])->name('deleteSDQSecond');
    
    Route::get('/srq', [DashboardController::class, 'srq'])->name('srq');
    Route::post('/srq', [InstrumenController::class, 'storeSRQ'])->name('storeSRQ');
    Route::get('/srq/{id}', [InstrumenController::class, 'viewSRQ'])->name('viewSRQ');
    Route::post('/srq/{id}/edit', [InstrumenController::class, 'editSRQ'])->name('editSRQ');
    Route::get('/srq/{id}/delete', [InstrumenController::class, 'deleteSRQ'])->name('deleteSRQ');

    Route::get('/report', [DashboardController::class, 'report'])->name('report');
});

Route::prefix('/')->group( function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::prefix('/screening-test')->group( function () {
        Route::get('/', [HomepageController::class, 'screening'])->name('screening');
        Route::get('/pin', [TestController::class, 'inputPin'])->name('pinScreening');
        Route::post('/pin', [TestController::class, 'checkPin'])->name('checkPin');
        Route::middleware(['isCorrectPin'])->group( function () {
            Route::get('/form-data', [TestController::class, 'formData'])->name('formData');
            Route::post('/form-data', [TestController::class, 'inputData'])->name('inputData');
            Route::get('/test{token}', [TestController::class, 'questions'])->name('questions');
            Route::post('/test/sdq', [TestController::class, 'sdqResponse'])->name('submitSDQ');
            Route::post('/test/srq', [TestController::class, 'srqResponse'])->name('submitSRQ');
        });
    });
    Route::get('/mandiri-test', [HomepageController::class, 'mandiri'])->name('mandiri');
});

require __DIR__.'/auth.php';

