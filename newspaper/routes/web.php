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

Route::get('/dragonDressage', 'ArticleController@dragon');
Route::get('/fotBoule', 'ArticleController@fotBoule');
Route::get('/sewerSurfin', 'ArticleController@sewer');
Route::get('/articles', 'ArticleController@index');


