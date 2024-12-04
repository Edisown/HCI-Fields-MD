<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BabyController;

// default Root / Welcome View
Route::get('/', function () {
    return view('welcome'); 
});


Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // route for dashboard
    Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

    // route for baby details, passing the baby id to the BabyController
    Route::get('/babydetails/{baby}', [BabyController::class, 'show'])->name('baby.details');
});


