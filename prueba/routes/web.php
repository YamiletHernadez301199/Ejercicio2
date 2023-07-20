<?php

use App\Http\Controllers\ComposerController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('raiz');
Route::get('/composer', [ComposerController::class, 'index'])->name('inicio');
Route::get('/composer/js', [ComposerController::class,'js'])->name('js');
Route::get('/composer/html', [ComposerController::class,'html'])->name('html');
Route::get('/composer/css', [ComposerController::class,'css'])->name('css');