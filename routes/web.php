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


Route::get('/', 'App\Http\Controllers\PostController@index');

Route::get('/posts/create','App\Http\Controllers\PostController@create');

Route::get('/posts/show','App\Http\Controllers\PostController@show');

Route::post('/posts/show','App\Http\Controllers\PostController@store');

Route::get('/posts/details', 'App\Http\Controllers\PostController@details');

Route::post('/posts/details', 'App\Http\Controllers\PostController@store');

Route::get('/posts/{post}/creedit', 'App\Http\Controllers\PostController@creedit');

Route::put('/posts/{post}', 'App\Http\Controllers\PostController@update');

Route::get('/posts/{post}/showedit', 'App\Http\Controllers\PostController@showedit');










