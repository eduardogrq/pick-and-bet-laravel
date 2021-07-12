<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForecastController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Forecasts

    Route::get('/', [ForecastController::class, 'welcome'])->name('welcome');

    Route::get('/free-picks', [ForecastController::class, 'freePicks'])->name('freePicks')->middleware('auth');

    Route::get('/premium-register', [ForecastController::class, 'premiumRegister'])->name('premiumRegister');

    Route::get('/premium-picks', [ForecastController::class, 'premiumPicks'])->name('premiumPicks')->middleware('auth');

    // All CRUD Methods
    Route::resource('forecasts', ForecastController::class);

//END FORECASTS

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
