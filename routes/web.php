<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ResponsibleController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\DestinationBankController;
use App\Http\Controllers\PurchaseRateController;
use App\Http\Controllers\ExchangeRateController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/auth', function () { return view('login');});

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);

//Route::get('/responsible', [ResponsibleController::class, 'index']);

Route::resource('/responsible', ResponsibleController::class);

Route::resource('/payment_type', PaymentTypeController::class);

Route::resource('/destination_bank', DestinationBankController::class);

Route::resource('/purchase_rate', PurchaseRateController::class);

Route::resource('/exchange_rate', ExchangeRateController::class);


