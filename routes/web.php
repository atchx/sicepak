<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PjController;
use App\Http\Controllers\ApbdController;
use App\Http\Controllers\PapbController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('login.index');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticated']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/apbds', ApbdController::class)->middleware('auth');
Route::resource('/papbs', PapbController::class)->middleware('auth');
Route::resource('/pjs', PjController::class)->middleware('auth');

Route::resource('/users', UserController::class)->middleware('auth');