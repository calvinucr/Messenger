<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 						'HomeController@index');
Route::get('/profile', 						'ProfileController@index');
Route::post('/profile/updateInfo', 			'ProfileController@updateInfo');
Route::post('/profile/updateDescription', 	'ProfileController@updateSummary');
Route::post('/profile/updateProfolio', 		'ProfileController@updateProfolio');
Route::get('/contacts', 					'ContactsController@index');

Auth::routes();

