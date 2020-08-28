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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('players/search', 'PlayerController@search')->name('players.search');
Route::get('players/draft/{draft_year}', 'PlayerController@draft')->name('players.draft');
Route::get('players/team/{team}', 'PlayerController@team')->name('players.team');
Route::get('players/java', 'PlayerController@java')->name('players.java');

Route::resource('players', 'PlayerController');

Route::resource('comments', 'CommentController');
