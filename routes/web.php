<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\RequestMusicController;
use App\Models\RequestMusic;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::middleware(['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->group(function () {
    //This route is solve when show 404 error when i add localization
    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    Route::get('/', HomeController::class)->name('home');
    Route::get('/test', function () {
        return view('test');
    });

    Route::get('/music/{id}', [MusicController::class, 'musicDetail']);
    Route::get('/music', [MusicController::class, 'index'])->name('all_music');
    Route::post('/request_music', [RequestMusicController::class, 'RequestMusic'])->name('request_music');
});
