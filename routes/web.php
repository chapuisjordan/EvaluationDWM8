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

Route::get('/', 'gamesController@accueil');
Route::get('/listing', 'gamesController@listing');
Route::get('/add', 'gamesController@add');
Route::post('/game/insert', 'gamesController@addAction');
Route::get('/delete', 'gamesController@delete');
Route::get('/game/delete/{id}', 'gamesController@deleteAction');
Route::get('/updatelist', 'gamesController@updatelist');
Route::get('/game/update/{id}', 'gamesController@update');
Route::post('/game/updateAction/{id}', 'gamesController@updateAction');
Route::post('/game/search/{id}', 'gamesController@searchIdAction');