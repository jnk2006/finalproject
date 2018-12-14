<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('widget', 'BotManController@widget');
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker')->name('tinker');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{user_id}/profile/{profile_id}', 'ProfileController@show')->name('profile.show');

Route::resources([
    'question' => 'QuestionController',
]);