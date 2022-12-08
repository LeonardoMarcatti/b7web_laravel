<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostControllerBackup;

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

Route::controller(PostController::class)->group(function(){
  Route::get('/', 'index');
  Route::get('/create', 'create');
  Route::get('/update', 'update');
  Route::get('/delete', 'destroy');
  Route::get('/read', 'show');
});

Route::controller(PostControllerBackup::class)->group(function(){
  Route::get('/posts/read', 'read');
  Route::get('/posts/updatemany', 'updateMany');
  Route::get('/posts/deletemany', 'deleteMany');
});
