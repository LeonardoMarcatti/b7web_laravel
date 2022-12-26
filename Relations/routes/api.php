<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(UsersController::class)->group( function() {
    Route::get('/users', 'index');
    Route::post('/create_user', 'create');
    Route::get('/user/{id}', 'findOne');
    Route::get('/user/address/{id}', 'findOneAddress');
});

Route::controller(AddressesController::class)->group( function() {
    Route::get('/addresses', 'index');
    Route::post('/create_address', 'create');
    Route::get('/address/{id}', 'findOne');
});
