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




Auth::routes();

Route::get('/adminpanel', 'HomeController@index');

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

});



