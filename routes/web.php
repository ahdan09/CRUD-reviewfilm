<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;


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

Route::get('/',[HomeController::class,'master']);
Route::get('/table',[AuthController::class,'table']);
Route::get('/data-table',[AuthController::class,'data']);

//CRUD cast
Route::get('/cast/create',[CastController::class,'tambah']);
Route::post('/cast',[CastController::class,'store']);
Route::get('/cast',[CastController::class,'index']);
Route::get('/cast/{id}',[CastController::class,'show']);
Route::get('/cast/{id}/edit',[CastController::class,'edit']);
Route::put('/cast/{id}',[CastController::class,'update']);
Route::delete('/cast/{id}',[CastController::class,'destroy']);
