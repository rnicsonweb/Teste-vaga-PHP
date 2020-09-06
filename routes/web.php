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

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'FilmsController@index');
Route::get('admin/filmes', 'FilmsController@index');
Route::get('admin/favoritos', 'FilmsController@favorites');
Route::get('admin/favoritos/adicionar/{id}', 'FilmsController@adicionar');
Route::get('admin/favoritos/remover/{id}', 'FilmsController@remover');
