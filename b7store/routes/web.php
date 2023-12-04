<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'home')->middleware('auth')->name('home');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard/myAccount', 'myAccount')->middleware('auth')->name('myAccount');
    Route::post('/dashboard/myAccountAction', 'myAccountAction')->middleware('auth')->name('myAccountAction');
});


Route::controller(AuthController::class)->group(function(){
    Route::get('/', 'login')->name('login');
    Route::get('/logup', 'logup')->name('logup');
    Route::get('/forgotPassword', 'forgotPassword')->name('forgotPassword');
    Route::get('/selectState', 'selectState')->name('selectState');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/logupAction', 'logupAction')->name('logupAction');
    Route::post('/loginAction', 'loginAction')->name('loginAction');
    Route::post('/selectStateAction', 'selectStateAction')->name('selectStateAction');
});
