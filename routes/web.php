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

Route::post('/selected_date', 'App\Http\Controllers\Selected_dateController@store');

Route::get('/plans', 'App\Http\Controllers\PlanController@index');

Route::get('/plans/create','App\Http\Controllers\PlanController@create');

Route::post('/plans', 'App\Http\Controllers\PlanController@store');

Route::get('/plans/{plan}','App\Http\Controllers\PlanController@show');

Route::get('/plans/{plan}/edit','App\Http\Controllers\PlanController@edit')->name('plan.edit');

Route::put('/plans/{plan}/store','App\Http\Controllers\PlanController@update');

Route::delete('/plans/{plan}','App\Http\Controllers\PlanController@delete');

Route::get('/executions/create','App\Http\Controllers\ExecutionController@create')->name('execution.create');

Route::post('/executions', 'App\Http\Controllers\ExecutionController@store');

Route::get('/executions/{execution}','App\Http\Controllers\ExecutionController@show');

Route::get('/executions/{plan}/edit','App\Http\Controllers\ExecutionController@edit');

Route::put('/executions/{execution}/store','App\Http\Controllers\ExecutionController@update');

Route::delete('/executions/{execution}','App\Http\Controllers\ExecutionController@delete');

Route::get('/goals', 'App\Http\Controllers\GoalController@index');

Route::get('/goals/create','App\Http\Controllers\GoalController@create');

Route::post('/goals', 'App\Http\Controllers\GoalController@store');

Route::get('/datas', 'App\Http\Controllers\DataController@index');

Route::get('/planlists/{planlists}/edit', 'App\Http\Controllers\PlanlistController@edit');

Route::get('/planlists', 'App\Http\Controllers\PlanlistController@index');

Route::get('/planlists/{plan}', 'App\Http\Controllers\PlanlistController@show');

Route::get('/reminders', 'App\Http\Controllers\ReminderController@index');






