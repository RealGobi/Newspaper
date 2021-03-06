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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', 'ArticleController@frontPage');

Route::get('/blernsball', 'ArticleController@blernsball');
Route::get('/anboJitsu', 'ArticleController@anboJitsu');
Route::get('/dragonDressage', 'ArticleController@dragon');

Route::get('/quidditch', 'ArticleController@quidditch');

Route::get('/lightsaber', 'ArticleController@lightsaber');

Route::get('/dejarik', 'ArticleController@dejarik');


Route::get('/fotBoule', 'ArticleController@fotBoule');
Route::get('/sewerSurfin', 'ArticleController@sewer');
Route::get('/articles', 'ArticleController@index');


Route::get('/secret', 'ArticleController@secret');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articles/{id}', 'ArticleController@show');

Route::get('/create', 'ArticleController@create');

Route::resource('/articles', 'ArticleController');

Route::get('/create', 'ArticleController@create');






