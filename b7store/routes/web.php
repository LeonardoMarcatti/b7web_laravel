<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
    Route::get('/', 'home')->name('home');
});


Route::controller(AuthController::class)->group(function(){
    Route::get('/logup', 'logup')->name('logup');
    Route::get('/login', 'login')->name('login');
    Route::get('/forgotPassword', 'forgotPassword')->name('forgotPassword');
    Route::get('/selectState', 'selectState')->name('selectState');
    Route::post('/logupAction', 'logupAction')->name('logupAction');
    Route::post('/selectStateAction', 'selectStateAction')->name('selectStateAction');

});
