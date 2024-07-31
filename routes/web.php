<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneratePinController;
use App\Http\Controllers\Admin\InstrumenController;
use App\Http\Controllers\Client\HomepageController;
use App\Http\Controllers\Client\TestController;
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

<<<<<<< HEAD
Route::prefix('/')->group( function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::prefix('/screening-test')->group( function () {
        Route::get('/', [HomepageController::class, 'screening'])->name('screening');
        Route::get('/pin', [TestController::class, 'inputPin'])->name('pinScreening');
        Route::post('/pin', [TestController::class, 'checkPin'])->name('checkPin');
        Route::get('/form-data', [TestController::class, 'formData'])->name('formData');
        Route::post('/form-data', [TestController::class, 'inputData'])->name('inputData');
        Route::get('/test', [TestController::class, 'sdqTest'])->name('testQuestions');
=======
    Route::get('/home', function(){
        return view('client.page.homepage.homepage');
>>>>>>> ce6208d275841c38fecd463fa385f468e3afd330
    });
    Route::get('/mandiri-test', [HomepageController::class, 'mandiri'])->name('mandiri');
});



require __DIR__.'/auth.php';

