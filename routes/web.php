<?php
use \App\Http\Controllers\TeamsController;
use \App\Http\Controllers\PlayersController;
use \App\Http\Controllers\RegisterController;
use \App\Http\Controllers\LoginController;

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

Route::get('/',['as' =>'all-teams', 'uses'=> 'TeamsController@index']);

Route::get('/register','RegisterController@create');

Route::post('/register','RegisterController@store');

Route::get('/logout','LoginController@destroy');

Route::get('/login','LoginController@create')->name('login');

Route::post('/login','LoginController@store');

Route::get('/teams/{id}',['as' =>'single-team', 'uses'=> 'TeamsController@show']);

Route::get('/players/{id}',['as' =>'single-player', 'uses'=> 'PlayersController@show']);

Route::post('/teams/{team_id}/comments', ['as' => 'comments-post', 'uses' => 'CommentsController@store']);