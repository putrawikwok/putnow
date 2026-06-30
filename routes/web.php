<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/jasa', [ServiceController::class, 'index'])
    ->name('services.index');

Route::get('/jasa/create', [ServiceController::class, 'create'])
    ->name('services.create');

Route::post('/jasa', [ServiceController::class, 'store'])
    ->name('services.store');

Route::get('/jasa/{service}/edit', [ServiceController::class, 'edit'])
    ->name('services.edit');
    
Route::put('/jasa/{service}', [ServiceController::class, 'update'])
    ->name('services.update');

Route::delete('/jasa/{service}', [ServiceController::class, 'destroy'])
    ->name('services.destroy');

Route::get('/jasa/{service}', [ServiceController::class, 'show'])
    ->name('services.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
