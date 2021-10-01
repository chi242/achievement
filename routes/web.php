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

Route::get('/logout',[
'uses' => 'App\Http\Controllers\HomeController@getLogout',
'as' => 'user.logout'
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/google', 'App\Http\Controllers\Auth\LoginController@getGoogleAuth');

Route::get('login/google/callback', 'App\Http\Controllers\Auth\LoginController@authGoogleCallback');

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::post('/selected_date', 'App\Http\Controllers\Selected_dateController@store');

Route::get('/plans/create','App\Http\Controllers\PlanController@create');

Route::post('/plans', 'App\Http\Controllers\PlanController@store');

Route::get('/plans/{plan}/edit','App\Http\Controllers\PlanController@edit')->name('plan.edit');

Route::put('/plans/{plan}/store','App\Http\Controllers\PlanController@updat');

Route::get('/reflection_pages/{plan}/create','App\Http\Controllers\Reflection_pageController@create')->name('reflection_page.create');

Route::post('/reflection_pages', 'App\Http\Controllers\Reflection_pageController@store');

Route::get('/reflection_pages/{plan}','App\Http\Controllers\Reflection_pageController@show');

Route::get('/reflection_pages/{plan}/edit','App\Http\Controllers\Reflection_pageController@edit');

Route::put('/reflection_pages/{plan}/store','App\Http\Controllers\Reflection_pageController@update');

Route::delete('/reflection_pages/{plan}','App\Http\Controllers\Reflection_pageController@delete');

Route::get('/goals', 'App\Http\Controllers\GoalController@index');

Route::get('/goals/create','App\Http\Controllers\GoalController@create');

Route::post('/goals', 'App\Http\Controllers\GoalController@store');

Route::get('/analysis_pages', 'App\Http\Controllers\Analysis_pageController@index');

Route::get('/planlists', 'App\Http\Controllers\PlanlistController@index');

Route::get('/planlists/getJson', function () {
    return User::paginate();
});

Route::get('/reminders', 'App\Http\Controllers\ReminderController@index');

Route::get('/reminders/getJson/{status}', 'App\Http\Controllers\ReminderController@getJson_achievement');

Route::get('/reminders/getJson', 'App\Http\Controllers\ReminderController@getJson_unreflection');

Route::get('/reminders/getJson/{reflection_page}', 'App\Http\Controllers\ReminderController@getJson_reflection_page');

Route::get('/collections', 'App\Http\Controllers\CollectionController@index');

Route::get('/collections/getJson', 'App\Http\Controllers\CollectionController@getJson_favorite');

// Route::get('/line/webhook', 'App\Http\Controllers\LineMessengerController@webhook')->name('line.webhook');

Route::post('/line/webhook', 'App\Http\Controllers\LineMessengerController@webhook')->name('line.webhook');

Route::get('/line/message', 'App\Http\Controllers\LineMessengerController@message');






