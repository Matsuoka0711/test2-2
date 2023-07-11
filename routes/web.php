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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalog', function () {return view('CatalogPage.catalog');})->name('catalog');

Route::get('/catalogAdd', function () {return view('CatalogPage.catalogAdd');})->name('catalogAdd');

Route::post('/products', 'ProductController@store')->name('products.store');





