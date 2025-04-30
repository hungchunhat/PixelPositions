<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[JobController::class,'index']);
Route::get('/search',SearchController::class);
Route::get('/tags/{tag:name}',TagController::class);

Route::get('/register',[RegisterUserController::class,'create'])->middleware('guest');
Route::post('/register',[RegisterUserController::class,'store'])->middleware('guest');
Route::get('/login',[SessionController::class,'create'])->middleware('guest');
Route::post('/login',[SessionController::class,'store'])->middleware('guest');

Route::delete('/logout',[SessionController::class,'destroy'])->middleware('auth');
