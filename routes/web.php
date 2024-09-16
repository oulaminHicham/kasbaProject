<?php

use App\Http\Controllers\Clientreservation;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SuiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//reservation page
Route::get('/reservation' , [Clientreservation::class , 'index'])->name('reservation');
Route::get('/card' , [PayementController::class , 'index'])->name('card');

// handel payement routes
Route::post('stripe' , [PayementController::class , 'stripe'])->name('stripe');
Route::get('success' , [PayementController::class , 'success'])->name('success');
Route::get('cancel' , [PayementController::class , 'cancel'])->name('cancel');

Route::get('/dashboard', [DashboardController::class , 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // suites routes
    Route::resource('suites' , SuiteController::class);
    // reservation routes
    Route::resource('reservations' , ReservationController::class);
});

Route::get('/contact' , function(){
    return view('contactUs');
})->name('contact');

require __DIR__.'/auth.php';


