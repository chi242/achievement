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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/todos/create','App\Http\Controllers\TodoController@create');

Route::post('/todos', 'App\Http\Controllers\TodoController@store');

Route::get('/todos/{todo}','App\Http\Controllers\TodoController@show');

Route::get('/todos/{todo}/edit','App\Http\Controllers\TodoController@edit');

Route::put('/todos/{todo}/store','App\Http\Controllers\TodoController@update');

Route::delete('/todos/{todo}','App\Http\Controllers\TodoController@delete');

Route::get('/reviews/create','App\Http\Controllers\ReviewController@create');

Route::post('/reviews', 'App\Http\Controllers\ReviewController@store');

Route::get('/reviews/{review}','App\Http\Controllers\ReviewController@show');

Route::get('/reviews/{review}/edit','App\Http\Controllers\ReviewController@edit');

Route::put('/reviews/{review}/store','App\Http\Controllers\ReviewController@update');

Route::delete('/reviews/{review}','App\Http\Controllers\ReviewController@delete');

Route::get('/goals', 'App\Http\Controllers\GoalController@index');

Route::get('/goals/create','App\Http\Controllers\GoalController@create');

Route::post('/goals', 'App\Http\Controllers\GoalController@store');

