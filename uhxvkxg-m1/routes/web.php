<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CatalogController;
use App\Models\product;
use  App\Http\Controllers\BasketController;
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog/{id}',[App\Http\Controllers\CatalogController::class, 'singleproduct']);
Route::get('/catalog/{add?}',[App\Http\Controllers\CatalogController::class, 'producted'])->name('catalog');
Route::get('/catalog/sort/{id}/{jik}',[App\Http\Controllers\CatalogController::class, 'producted']);
Route::get('/catalog/sort/{tip?}/{sort?}',[App\Http\Controllers\CatalogController::class, 'sortItem']);


Route::get('/basket',[BasketController::class, 'baskets'])->name('bskt');
Route::get('/basket/{id?}',[BasketController::class, 'products']);
Route::get('/basket/{id?}/delete',[BasketController::class, 'deletebasket']);

Route::get('/admin',[BasketController::class, 'addstore'])->name('admn');;
Route::post('/products',[BasketController::class, 'store'])->name('add-form');
Route::get('/',[App\Http\Controllers\CatalogController::class, 'slider'])->name('glav');
