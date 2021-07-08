<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForecastController;
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

    // All CRUD Methods
    Route::resource('forecasts', ForecastController::class);

//END FORECASTS

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
