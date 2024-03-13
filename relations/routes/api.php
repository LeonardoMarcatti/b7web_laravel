<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::controller(UserController::class)->group(function(){
    Route::get('/users', 'index')->name('users');
    Route::get('/user/{id}', 'getUser')->name('getUser');

    Route::post('/user', 'addUser')->name('addUser');
});

Route::controller(AddressController::class)->group(function(){
    Route::get('/addresses', 'index')->name('addresses');
    Route::get('/address/{id}', 'getAddress')->name('getAddres');

    Route::post('/address', 'addAddress')->name('addAddress');
});
