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


Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/diaries/create','App\Http\Controllers\DiaryController@create');

Route::put('/diaries/{diary}/store','App\Http\Controllers\DiaryController@update');

Route::get('/diaries/{diary}','App\Http\Controllers\DiaryController@index');

Route::post('/diaries', 'App\Http\Controllers\DiaryController@store');

Route::get('/diaries/{diary}/edit','App\Http\Controllers\DiaryController@edit');



Route::get('/goals', 'App\Http\Controllers\GoalController@index');

Route::get('/goals/create','App\Http\Controllers\GoalController@create');

Route::get('/goals/{goal}','App\Http\Controllers\GoalController@index');

Route::post('/goals', 'App\Http\Controllers\GoalController@store');














Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
