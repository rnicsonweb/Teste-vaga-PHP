<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('auth/login', 'Api\AuthController@login');
Route::post('register','Api\UserController@store');

Route::group(['middleware' => ['apiJwt']], function(){
    Route::post('auth/logout', 'Api\AuthController@logout');
    Route::get('users','Api\UserController@index');
    Route::resource('filmes','Api\Films\FilmsController');
    Route::resource('favoritos','Api\Films\FavoritesController');
});
