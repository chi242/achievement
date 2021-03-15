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


Route::get('/', 'App\Http\Controllers\GoalController@index');

Route::get('/goals/create','App\Http\Controllers\GoalController@create');

Route::get('/diaries/show','App\Http\Controllers\DiaryController@show');

Route::get('/goals/details', 'App\Http\Controllers\GoalController@details');

Route::post('/goals/details', 'App\Http\Controllers\GoalController@store');

Route::get('/goals/edit', 'App\Http\Controllers\GoalController@edit');

Route::put('/goals/edit', 'App\Http\Controllers\GoalController@update');

Route::post('/diaries/show', 'App\Http\Controllers\DiaryController@store');

Route::get('/diaries/edit', 'App\Http\Controllers\DiaryController@edit');

Route::put('/diaries/edit', 'App\Http\Controllers\DiaryController@update');









