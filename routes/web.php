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

    //    CRUD
    Route::resource('forecasts', ForecastController::class);
    //    END CRUD


//END FORECASTS

//Users

    Route::resource('/users', UserController::class);

//END Users

// Dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', compact('user'));
})->name('dashboard');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
