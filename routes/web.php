<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\GuestPageController;
use App\Http\Controllers\MuseumsController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::resource('artists', ArtistController::class);

Route::resource('museums', MuseumsController::class);

Route::resource('artworks', ArtworkController::class);
