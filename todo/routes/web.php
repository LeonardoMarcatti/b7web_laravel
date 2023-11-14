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
	Route::get('/', 'index')->middleware('auth')->name('home');
});

Route::middleware(['auth'])->group(function(){
	Route::controller(TaskController::class)->group(function(){
		Route::prefix('/task')->group(function(){
			Route::get('/new', 'create')->name('taskCreate');
			Route::post('/create', 'createAction')->name('taskCreateAction');
			Route::get('/{id}', 'index')->name('taskView');
			Route::get('/edit/{id}', 'getTask')->name('taskEdit');
			Route::post('/editAction', 'edit')->name('taskEditAction');
			Route::post('/taskUpdate', 'taskUpdate')->name('taskUpdate');
			Route::get('/delete/{id}', 'redirectDelete')->name('redirectDelete');
			Route::get('/sure/{id}', 'delete')->name('sure');
		});
	});
});

Route::controller(AuthController::class)->group( function(){
	Route::get('/login', 'index')->name('login');
	Route::post('/loginAction', 'loginAction')->name('loginAction');
	Route::get('/logup', 'logup')->name('logup');
	Route::post('/logupAction', 'logupAction')->name('logupAction');
	Route::get('/logout', 'logout')->name('logout');
});