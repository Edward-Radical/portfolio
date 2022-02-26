<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoundController;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/link1', [App\Http\Controllers\SoundController::class, 'projects']);
Route::get('link1/{sound}', [App\Http\Controllers\SoundController::class, 'show']);



Route::get('/link2', function () {
    return view('link2');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
