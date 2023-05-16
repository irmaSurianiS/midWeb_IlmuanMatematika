<?php

use App\Http\Controllers\IlmuanMatematikaController;
use App\Models\IlmuanMatematika;
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

Route::resource('ilmuan', IlmuanMatematikaController::class)->except('index');
Route::get('/', [IlmuanMatematikaController::class, 'index'])->name('ilmuan.index');
