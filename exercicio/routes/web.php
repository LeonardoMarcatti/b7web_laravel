<?php

use App\Http\Controllers\PagesController;
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

Route::controller(PagesController::class)->group( function() {
    Route::get('/', 'index');
    Route::get('/comp', 'component');
    Route::get('/layout', 'layout');
    Route::get('/layout2', 'layout2');
    Route::get('/include2', 'include2');
    Route::get('/include', 'include');
    Route::get('/if', 'includeIf');
    Route::get('ex1', 'exercicio1');
    Route::get('ex2/{qte}', 'exercicio2');
    Route::get('test/{val}', 'test');
});