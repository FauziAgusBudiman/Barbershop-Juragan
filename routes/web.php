<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BarberController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\GalleryController as ControllersGalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $about = \App\Models\About::first();
    $services = \App\Models\Service::latest()->get();
    $barbers = \App\Models\Barber::all();
    $galleries = Gallery::all();
    return view('frontend.home')
    ->with('about', $about)
    ->with('services', $services) 
    ->with('barbers', $barbers) 
    ->with ('galleries', $galleries);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::resource('about', AboutController::class);
    route::resource('services', ServicesController::class);
    Route::resource('barbers', BarberController::class);
    Route::resource('gallery', ControllersGalleryController::class);

});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
            


        });

  
       
});

Route::middleware(['auth', 'admin'])->group(function () {
    
});


require __DIR__.'/auth.php';
