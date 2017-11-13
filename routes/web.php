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


/*
|---------------------------
| FrontEnd features
|---------------------------
*/
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [
	'uses' => 'FrontEndController@index',
	'as' => 'frontend.index'
]);

Route::get('/about', [
	'uses' => 'FrontEndController@about',
	'as' => 'frontend.about'
]);




Auth::routes();

Route::get('/admin', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	/*
	|---------------------------
	| Homepage features
	|---------------------------
	*/

	Route::get('/homepage', [
	    'uses' => 'HomepageController@index',
	    'as' => 'homepage.index'
	]);

	Route::get('/homepage/create', [
	    'uses' => 'HomepageController@create',
	    'as' => 'homepage.create'
	]);

	Route::post('/homepage/store', [
	    'uses' => 'HomepageController@store',
	    'as' => 'homepage.store'
	]);

	Route::get('/homepage/edit/{id}', [
	    'uses' => 'HomepageController@edit',
	    'as' => 'homepage.edit'
	]);

	Route::post('homepage/update/{id}', [
		'uses' => 'HomepageController@update',
		'as' => 'homepage.update'
	]);

	/*
	|---------------------------
	| About features
	|---------------------------
	*/

	Route::get('/about-us', [
		'uses' => 'AboutController@index',
		'as' => 'about.index'
	]);

	Route::get('/about-us/create', [
		'uses' => 'AboutController@create',
		'as' => 'about.create'
	]);

	Route::post('/about-us/store', [
		'uses' => 'AboutController@store',
		'as' => 'about.store'
	]);

	Route::get('/about-us/edit/{id}', [
		'uses' => 'AboutController@edit',
		'as' => 'about.edit'
	]);

	Route::post('/about-us/update/{id}', [
		'uses' => 'AboutController@update',
		'as' => 'about.update'
	]);

	/*
	|---------------------------
	| service features
	|---------------------------
	*/

	Route::get('/service', [
		'uses' => 'ServiceController@index',
		'as' => 'service.index'
	]);

	Route::get('/service/create', [
		'uses' => 'ServiceController@create',
		'as' => 'service.create'
	]);

	Route::post('/service/store', [
		'uses' => 'ServiceController@store',
		'as' => 'service.store'
	]);

	Route::get('/service/edit/{id}', [
		'uses' => 'ServiceController@edit',
		'as' => 'service.edit'
	]);

	Route::post('/service/update/{id}', [
		'uses' => 'ServiceController@update',
		'as' => 'service.update'
	]);
});



