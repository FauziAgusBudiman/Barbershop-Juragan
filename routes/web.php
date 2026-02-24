<?php

use App\Http\Controllers\Admin\BarberController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        Route::resource('services', ServiceController::class);
        Route::resource('barbers', BarberController::class);
        Route::resource('galleries', GalleryController::class);

});
require __DIR__.'/auth.php';
