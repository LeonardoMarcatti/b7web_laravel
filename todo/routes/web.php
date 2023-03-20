<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


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

Route::controller(HomeController::class)->group( function(){
    Route::get('/', 'index')->name('home');
});

Route::controller(TaskController::class)->group(function(){
    Route::get('/task/new', 'create')->name('taskCreate');
    Route::post('/task/create', 'createAction')->name('taskCreateAction');
    Route::get('/task/{id}', 'index')->name('taskView');
    Route::get('/task/edit/{id}', 'edit')->name('taskEdit');
    Route::get('/task/delete/{id}', 'delete')->name('taskDelete');
});

Route::controller(AuthController::class)->group( function(){
    Route::get('/login', 'index')->name('login');
    Route::get('/logup', 'logup')->name('logup');
});