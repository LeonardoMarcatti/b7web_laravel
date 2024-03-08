<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ExercicesController;

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

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/sair', 'logout')->name('logout');
    Route::get('/users/{number}', 'users')->name('users');
    Route::get('/blade', 'blade')->name('blade');
    Route::get('/include', 'include')->name('include');
    Route::get('/components', 'components')->name('components');
    Route::get('/layout', 'layout')->name('layout');
    Route::get('/layout2', 'layout2')->name('layout2');
});

Route::controller(ExercicesController::class)->group(function(){
    Route::get('/ex1', 'ex1')->name('ex1');
    Route::get('/ex2', 'ex2')->name('ex2');
});
