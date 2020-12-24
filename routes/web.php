<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/home', [AuthController::class, 'home']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'storeUser']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/logout', [AuthController::class, 'logout']);


// Route::get('/register', 'Auth\AuthController@register')->name('register');
// Route::post('/register', 'Auth\AuthController@store');

// Route::get('/login', 'Auth\AuthController@login')->name('login');
// Route::post('/login', 'Auth\AuthController@authenticate');

// Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
