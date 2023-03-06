<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BascetController;
use App\Http\Controllers\Controller\Group;

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
})->name('main');

Auth::routes();

Route::get('/home', function () {return view('home');})->name('home');

Route::get('/wheretofind', function () {return view('wheretofind');})->name('wheretofind');

Route::get('/catalog', '\App\Http\Controllers\BaseController@products')->name('catalog');

Route::get('/aboutus', '\App\Http\Controllers\BaseController@slider')->name('aboutus');

Route::get('/catalog/{id}', [\App\Http\Controllers\BaseController::class,'singlproduct']);


Route::get('/bascet',[BascetController::class,'bascets'])->name('bascet');

Route::get('/bascet/{id}',[BascetController::class,'products']);

Route::get('/bascet/{id?}/delete',[BascetController::class, 'deletebascet']);


