<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestController;
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

Route::controller(PagesController::class)->group( function(){
    Route::get('/', 'index');
});

Route::controller(TestController::class)->group( function(){
    Route::get('/test/{id}', 'index');
    Route::get('/test/{id}/{task}', 'task');
    Route::get('all/categories', 'getAll');
    Route::get('task/{id}', 'getTask');
    Route::get('user/{id}', 'getUserCategories');
});