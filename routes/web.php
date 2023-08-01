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

Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::get('/index', function () {return view('page.index');})->name('index');

Route::get('/list', [App\Http\Controllers\ProductController::class, 'showList'])->name('list');

Route::get('/regist',[App\Http\Controllers\ProductController::class, 'showRegistForm'])->name('regist');

Route::post('/regist',[App\Http\Controllers\ProductController::class, 'registSubmit'])->name('submit');

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

Route::get('/update/{id}',[App\Http\Controllers\ProductController::class, 'showUpdate'])->name('show.update');

Route::put('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');