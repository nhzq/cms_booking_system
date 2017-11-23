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

Route::get('/our-service', [
	'uses' => 'FrontEndController@service',
	'as' => 'frontend.service'
]);

Route::get('/news-media', [
	'uses' => 'FrontEndController@news',
	'as' => 'frontend.news'
]);

Route::get('/news-media/post/{slug}', [
	'uses' => 'FrontEndController@newsPost',
	'as' => 'frontend.news-post'
]);

Route::get('/contact', [
	'uses' => 'FrontEndController@contact',
	'as' => 'frontend.contact'
]);

Route::post('/contact/send', [
	'uses' => 'FrontEndController@contactSend',
	'as' => 'frontend.contact.send'
]);


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	/*
	|---------------------------
	| Dashboard features
	|---------------------------
	*/

	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' => 'home.index'
	]);

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


	/*
	|---------------------------
	| news features
	|---------------------------
	*/

	Route::get('/news', [
		'uses' => 'NewsPostController@index',
		'as' => 'news.index'
	]);

	Route::get('/news/create', [
		'uses' => 'NewsPostController@create',
		'as' => 'news.create'
	]);

	Route::post('/news/store', [
		'uses' => 'NewsPostController@store',
		'as' => 'news.store'
	]);

	Route::get('/news/edit/{id}', [
		'uses' => 'NewsPostController@edit',
		'as' => 'news.edit'
	]);

	Route::post('news/update/{id}', [
		'uses' => 'NewsPostController@update',
		'as' => 'news.update'
	]);

	Route::get('news/delete/{id}', [
		'uses' => 'NewsPostController@destroy',
		'as' => 'news.delete'
	]);

	Route::get('news/trashed', [
		'uses' => 'NewsPostController@trashed',
		'as' => 'news.trashed'
	]);

	Route::get('news/restore/{id}', [
		'uses' => 'NewsPostController@restore',
		'as' => 'news.restore'
	]);

	Route::get('news/kill/{id}', [
		'uses' => 'NewsPostController@kill',
		'as' => 'news.kill'
	]);


	/*
	|---------------------------
	| Category features
	|---------------------------
	*/

	Route::get('/category', [
		'uses' => 'CategoryController@index',
		'as' => 'category.index' 
	]);

	Route::get('/category/create', [
		'uses' => 'CategoryController@create',
		'as' => 'category.create' 
	]);

	Route::post('/category/store', [
		'uses' => 'CategoryController@store',
		'as' => 'category.store' 
	]);


	/*
	|---------------------------
	| Subcategory features
	|---------------------------
	*/
	Route::get('/subcategory/create', [
		'uses' => 'SubcategoryController@create',
		'as' => 'subcategory.create' 
	]);

	Route::post('/subcategory/store', [
		'uses' => 'SubcategoryController@store',
		'as' => 'subcategory.store' 
	]);
});



