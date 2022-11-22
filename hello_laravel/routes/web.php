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

// Se um grupo de rotas utilliza o mesmo controller é possível agrupar essas rotas da forma abaixo.
// Deste jeito se passa apenas o nome do método.
Route::controller(SiteController::class)->group(function () {
  Route::get('/sobre', 'about');
  Route::get('/sair', 'logout');
  Route::get('/usuarios/{qte?}', 'users');
  Route::get('/', 'index');
  Route::get('/comp', 'comp');
  
});
