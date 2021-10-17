<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NbaDatabaseController;
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
    return view('welcome');
});

Route::get('/players', [NbaDatabaseController::class, 'players']);
Route::get('/teams', [NbaDatabaseController::class, 'teams']);
Route::get('/team/{key}', [NbaDatabaseController::class, 'team']);
Route::get('/team/{key}/player/{id}', [NbaDatabaseController::class, 'teamplayer']);

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');