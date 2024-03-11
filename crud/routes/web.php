<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\PagesController;
use  App\Http\Controllers\PostsController;

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
});


Route::controller(PostsController::class)->group(function(){
    Route::get('/create', 'create')->name('create');
    Route::get('/update/{id}', 'update')->name('update');
    Route::get('/delete/{id}', 'delete')->name('delete');

    Route::post('/createPost', 'createPost')->name('createPost');
    Route::post('/updatePost', 'updatePost')->name('updatePost');
});

