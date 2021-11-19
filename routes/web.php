<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class,'index'])->name('index');
Route::get('/list', [\App\Http\Controllers\MainController::class,'list'])->name('list');
Route::get('/single', [\App\Http\Controllers\MainController::class,'single'])->name('single');
Route::post('/inceleme', [\App\Http\Controllers\MainController::class,'look'])->name('look');
Route::post('/getImage', [\App\Http\Controllers\MainController::class,'getImage'])->name('getImage');

