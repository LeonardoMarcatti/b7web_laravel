<?php

use App\Http\Controllers\SiteController;
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

Route::get('/test', [TestController::class, 'test']);
Route::get('/bv', [SiteController::class, 'bv']);
Route::get('/', [SiteController::class, 'index']);
Route::get('/logout', [SiteController::class, 'logout']);
