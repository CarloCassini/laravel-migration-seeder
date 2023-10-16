<?php

use App\Http\Controllers\PageController;

use App\Http\Controllers\TrainController;
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

Route::get('/fintaHome', [PageController::class, 'index'])->name('home');

Route::get('/', [TrainController::class, 'train_list'])->name('train_list');
Route::get('/today', [TrainController::class, 'select_today'])->name('select_today');