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

Route::get('/posts/show','App\Http\Controllers\DiaryController@show');

Route::get('/posts/details', 'App\Http\Controllers\PostController@details');

Route::post('/posts/details', 'App\Http\Controllers\PostController@store');

Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit');

Route::put('/posts/{post}/edit', 'App\Http\Controllers\PostController@update');

Route::post('/posts/show', 'App\Http\Controllers\DiaryController@store');

Route::get('/posts/{post}/edit', 'App\Http\Controllers\DiaryController@edit');

Route::put('/posts/{post}/edit', 'App\Http\Controllers\DiaryController@update');









