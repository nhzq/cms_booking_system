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
    return view('index');
});

Auth::routes();

Route::get('/adminpanel', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	//Homepage features
	Route::get('/homepage/create', [
	    'uses' => 'HomepageController@create',
	    'as' => 'homepage.create'
	]);

	Route::post('/homepage/store', [
	    'uses' => 'HomepageController@store',
	    'as' => 'homepage.store'
	]);

});

