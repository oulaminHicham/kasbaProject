<?php

use App\Http\Controllers\Clientreservation;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\SuiteController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// how we are
Route::get('/experiences' , function(){
    return view('experiences');
});
//reservation page
Route::get('/reservation' , [Clientreservation::class , 'index'])->name('reservation');
Route::post('/card' , [PayementController::class , 'index'])->name('card');
Route::get('/reservation/{id}' , [Clientreservation::class , 'show'])->name('reservationDetails');


// handel payement routes
Route::post('stripeReq' , [PayementController::class , 'stripe'])->name('stripeReq');
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
    // parmetre routes
    Route::resource('parametres' , ParametreController::class);
    // stripe dynamique add
    Route::resource('stripe' , StripeController::class);
});
// contact route
Route::get('/contactUs' , function(){
    return view('contactUs');
})->name('contactUs');
// manage contact
Route::resource('contact' , MessageController::class);

// set language route 
route::post('/language-switch', [LanguageController::class, 'languageSwitch'])->name('language.switch');




require __DIR__.'/auth.php';


