<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForecastController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

    Route::get('/forecasts', [ForecastController::class, 'index'])->name('forecasts.index');

    Route::get('/forecasts-create', [ForecastController::class, 'create'])->name('forecasts.create');

    Route::post('/forecasts-create', [ForecastController::class, 'store'])->name('forecasts.store');

    Route::delete('/forecasts/{id}', [ForecastController::class, 'destroy'])->name('forecasts.delete');


//END FORECASTS

//Users

    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::get('/users-create', [UserController::class, 'create'])->name('users.create');

    Route::post('/users-create', [UserController::class, 'store'])->name('users.store');

    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete');

//END Users

// Dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
