<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForecastController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

    Route::resource('forecasts', ForecastController::class)->middleware('role:admin');

    Route::get('/', [ForecastController::class, 'welcome'])->name('welcome');

    Route::get('/free-picks', [ForecastController::class, 'freePicks'])->name('freePicks');

    //    Middlewares de roles para premium
    Route::group(['middleware' => 'role:premium|admin'], function () {
        Route::get('/premium-picks', [ForecastController::class, 'premiumPicks'])->name('premiumPicks')->middleware('auth');
    });

    Route::get('/premium-register', [ForecastController::class, 'premiumRegister'])->name('premiumRegister');

//END Forecasts ****************************** ***

//Users

    Route::resource('/users', UserController::class)->middleware('role:admin');

//END Users *********************************

// Dashboard
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Route::post('/registerUser', [UserController::class, 'registerUser'])->name('registerUser');
