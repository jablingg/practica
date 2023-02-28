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
Route::get('/where', function () {
    return view('where');
})->name('gde');;
Route::get('/','App\Http\Controllers\grops@slider')->name('glav');;
Route::get('/catalog','App\Http\Controllers\grops@producted')->name('catalog');;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
