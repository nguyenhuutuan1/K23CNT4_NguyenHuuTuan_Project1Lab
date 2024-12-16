<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\NhtSessionController;

Route::get('/', function () {
    return view('welcome');
});

// test session
Route::get('/nht-session/get', [NhtSessionController::class, 'nhtGetSessionData'])->name('nhtsession.get');
Route::get('/nht-session/set', [NhtSessionController::class, 'nhtStoreSessionData'])->name('nhtsession.set');
Route::get('/nht-session/del', [NhtSessionController::class, 'nhtDeleteSessionData'])->name('nhtsession.del');


#Account
use App\Http\Controllers\NhtAccountController;

Route::get('/nht-login', [NhtAccountController::class, 'nhtLogin'])->name('nhtaccount.nhtlogin');
Route::post('/nht-login', [NhtAccountController::class, 'nhtLoginSubmit'])->name('nhtaccount.nhtloginsubmit');
