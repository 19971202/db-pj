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

Route::get('/', 'DbclassController@index');
Route::get('/add', 'DbclassController@add');
Route::post('/add', 'DbclassController@create');
Route::get('/edit', 'DbclassController@edit');
Route::post('/edit', 'DbclassController@update');
Route::get('/delete', 'DbclassController@delete');
Route::post('/delete', 'DbclassController@remove');