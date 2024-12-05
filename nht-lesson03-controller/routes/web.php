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

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\NhtAccountController;

Route::get("/nht-account",[NhtAccountController::class,'nhtIndex'])->name('nhtAccount.nhtIndex');
Route::get("/nht-account-create",[NhtAccountController::class,'nhtCreate'])->name('nhtAccount.nhtCreate');
Route::get("/nht-account-show-data",[NhtAccountController::class,'nhtShowData'])->name('nhtAccount.nhtShowData');
Route::get("/nht-account-list-data",[NhtAccountController::class,'nhtList'])->name('nhtAccount.nhtList');
Route::get("/nht-account-list",[NhtAccountController::class,'nhtGetAll'])->name('nhtAccount.nhtGetAll');



