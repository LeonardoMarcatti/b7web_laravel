<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoicesController;


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
    Route::get('/user/{id}/addresses', 'findUserAddresses');
});

Route::controller(AddressesController::class)->group( function() {
    Route::get('/addresses', 'index');
    Route::post('/create_address', 'create');
    Route::get('/address/{id}', 'findOne');
});

Route::controller(InvoicesController::class)->group( function() {
    Route::get('/invoices', 'index');
    Route::get('/invoice/{id}', 'getByID');
    Route::get('/invoice/user/{id}', 'getByUserID');
    Route::get('/invoice/address/{id}', 'getByAddressID');
    Route::get('/invoice/{address_id}/address', 'getAddress');
    Route::get('/invoice/{user_id}/user', 'getUser');
    Route::post('/create_invoice', 'create');
    Route::delete('/delete/{id}', 'delete');
});
