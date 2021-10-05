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
Route::get('players/create ', [NbaDatabaseController::class, 'create']);
Route::get('/players/{id}', [NbaDatabaseController::class, 'show']);
Route::get('/teams/{name}', [NbaDatabaseController::class, 'teamsshow']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'players'])->name('home');