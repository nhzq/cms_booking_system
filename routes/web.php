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

Route::get('/home', [
	'uses' => 'HomeController@routeForRole',
	'as' => 'home.route'
]);

Route::get('/admin', [
	'uses' => 'HomeController@routeForRole',
	'as' => 'home.route'
]);

/*
|---------------------------
| Super Admin Route
|---------------------------
*/
Route::group(['prefix' => 'superadmin', 'middleware' => 'auth'], function() {

	Route::get('/', [
		'uses' => 'SuperAdmin\SuperAdminController@index',
		'as' => 'superadmin.index',
		'middleware' => 'roles',
		'roles' => ['Super Admin']
		
	]);
});


/*
|---------------------------
| Web Admin Route
|---------------------------
*/
Route::group(['prefix' => 'webadmin', 'middleware' => 'auth'], function() {

	Route::get('/', [
		'uses' => 'WebAdmin\WebAdminController@index',
		'as' => 'webadmin.index',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
		
	]);


	/*
	|---------------------------
	| Homepage features
	|---------------------------
	*/

	Route::get('/homepage', [
	    'uses' => 'WebAdmin\HomepageController@index',
	    'as' => 'webadmin.homepage.index',
	    'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('/homepage/create', [
	    'uses' => 'WebAdmin\HomepageController@create',
	    'as' => 'webadmin.homepage.create',
	    'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::post('/homepage/store', [
	    'uses' => 'WebAdmin\HomepageController@store',
	    'as' => 'webadmin.homepage.store',
	    'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('/homepage/edit/{id}', [
	    'uses' => 'WebAdmin\HomepageController@edit',
	    'as' => 'webadmin.homepage.edit',
	    'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::post('homepage/update/{id}', [
		'uses' => 'WebAdmin\HomepageController@update',
		'as' => 'webadmin.homepage.update',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);


	/*
	|---------------------------
	| About features
	|---------------------------
	*/

	Route::get('/about-us', [
		'uses' => 'WebAdmin\AboutController@index',
		'as' => 'webadmin.about.index',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('/about-us/create', [
		'uses' => 'WebAdmin\AboutController@create',
		'as' => 'webadmin.about.create',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::post('/about-us/store', [
		'uses' => 'WebAdmin\AboutController@store',
		'as' => 'webadmin.about.store',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('/about-us/edit/{id}', [
		'uses' => 'WebAdmin\AboutController@edit',
		'as' => 'webadmin.about.edit',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::post('/about-us/update/{id}', [
		'uses' => 'WebAdmin\AboutController@update',
		'as' => 'webadmin.about.update',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);


	/*
	|---------------------------
	| Service features
	|---------------------------
	*/

	Route::get('/service', [
		'uses' => 'WebAdmin\ServiceController@index',
		'as' => 'webadmin.service.index',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('/service/create', [
		'uses' => 'WebAdmin\ServiceController@create',
		'as' => 'webadmin.service.create',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::post('/service/store', [
		'uses' => 'WebAdmin\ServiceController@store',
		'as' => 'webadmin.service.store',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('/service/edit/{id}', [
		'uses' => 'WebAdmin\ServiceController@edit',
		'as' => 'webadmin.service.edit',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::post('/service/update/{id}', [
		'uses' => 'WebAdmin\ServiceController@update',
		'as' => 'webadmin.service.update',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);



	/*
	|---------------------------
	| news features
	|---------------------------
	*/

	Route::get('/news', [
		'uses' => 'WebAdmin\NewsPostController@index',
		'as' => 'webadmin.news.index'
	]);

	Route::get('/news/create', [
		'uses' => 'WebAdmin\NewsPostController@create',
		'as' => 'webadmin.news.create',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::post('/news/store', [
		'uses' => 'WebAdmin\NewsPostController@store',
		'as' => 'webadmin.news.store',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('/news/edit/{id}', [
		'uses' => 'WebAdmin\NewsPostController@edit',
		'as' => 'webadmin.news.edit',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::post('news/update/{id}', [
		'uses' => 'WebAdmin\NewsPostController@update',
		'as' => 'webadmin.news.update',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('news/delete/{id}', [
		'uses' => 'WebAdmin\NewsPostController@destroy',
		'as' => 'webadmin.news.delete',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('news/trashed', [
		'uses' => 'WebAdmin\NewsPostController@trashed',
		'as' => 'webadmin.news.trashed',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('news/restore/{id}', [
		'uses' => 'WebAdmin\NewsPostController@restore',
		'as' => 'webadmin.news.restore',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);

	Route::get('news/kill/{id}', [
		'uses' => 'WebAdmin\NewsPostController@kill',
		'as' => 'webadmin.news.kill',
		'middleware' => 'roles',
		'roles' => ['Web Admin']
	]);
});


/*
|---------------------------
| System Admin Route
|---------------------------
*/
Route::group(['prefix' => 'systemadmin', 'middleware' => 'auth'], function() {

	Route::get('/', [
		'uses' => 'SystemAdmin\SystemAdminController@index',
		'as' => 'systemadmin.index',
		'middleware' => 'roles',
		'roles' => ['System Admin']
		
	]);


	/*
	|---------------------------
	| Category features
	|---------------------------
	*/

	Route::get('/category', [
		'uses' => 'SystemAdmin\CategoryController@index',
		'as' => 'systemadmin.category.index',
		'middleware' => 'roles',
		'roles' => ['System Admin']
	]);

	Route::get('/category/create', [
		'uses' => 'SystemAdmin\CategoryController@create',
		'as' => 'systemadmin.category.create',
		'middleware' => 'roles',
		'roles' => ['System Admin']
	]);

	Route::post('/category/store', [
		'uses' => 'SystemAdmin\CategoryController@store',
		'as' => 'systemadmin.category.store',
		'middleware' => 'roles',
		'roles' => ['System Admin']
	]);

	Route::get('/category/edit/{id}', [
		'uses' => 'SystemAdmin\CategoryController@edit',
		'as' => 'systemadmin.category.edit',
		'middleware' => 'roles',
		'roles' => ['System Admin']
	]);

	Route::post('/category/update/{id}', [
		'uses' => 'SystemAdmin\CategoryController@update',
		'as' => 'systemadmin.category.update',
		'middleware' => 'roles',
		'roles' => ['System Admin']
	]);


	/*
	|---------------------------
	| Subcategory features
	|---------------------------
	*/

	Route::get('/subcategory/create', [
		'uses' => 'SystemAdmin\SubcategoryController@create',
		'as' => 'systemadmin.subcategory.create',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::post('/subcategory/store', [
		'uses' => 'SystemAdmin\SubcategoryController@store',
		'as' => 'systemadmin.subcategory.store',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::get('/subcategory/edit/{id}', [
		'uses' => 'SystemAdmin\CategoryController@edit_sub',
		'as' => 'systemadmin.subcategory.edit',
		'middleware' => 'roles',
		'roles' => ['System Admin']
	]);

	Route::post('/subcategory/update/{id}', [
		'uses' => 'SystemAdmin\CategoryController@update_sub',
		'as' => 'systemadmin.subcategory.update',
		'middleware' => 'roles',
		'roles' => ['System Admin']
	]);


	/*
	|---------------------------
	| Location features
	|---------------------------
	*/

	Route::get('/location', [
		'uses' => 'SystemAdmin\LocationController@index',
		'as' => 'systemadmin.location.index',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::get('/location/create', [
		'uses' => 'SystemAdmin\LocationController@create',
		'as' => 'systemadmin.location.create',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::post('/location/store', [
		'uses' => 'SystemAdmin\LocationController@store',
		'as' => 'systemadmin.location.store',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::get('/location/edit/{id}', [
		'uses' => 'SystemAdmin\LocationController@edit',
		'as' => 'systemadmin.location.edit',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::post('/location/update/{id}', [
		'uses' => 'SystemAdmin\LocationController@update',
		'as' => 'systemadmin.location.update',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);


	/*
	|---------------------------
	| Training features
	|---------------------------
	*/

	Route::get('/training', [
		'uses' => 'SystemAdmin\TrainingController@index',
		'as' => 'systemadmin.training.index',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::get('training/create', [
		'uses' => 'SystemAdmin\TrainingController@create',
		'as' => 'systemadmin.training.create',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::get('/ajax-subcat', [
		'uses' => 'AjaxController@subcat',
		'as' => 'training.subcat',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::post('/training/store', [
		'uses' => 'SystemAdmin\TrainingController@store',
		'as' => 'systemadmin.training.store',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::get('/training/edit/{id}', [
		'uses' => 'SystemAdmin\TrainingController@edit',
		'as' => 'systemadmin.training.edit',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);

	Route::post('/training/update/{id}', [
		'uses' => 'SystemAdmin\TrainingController@update',
		'as' => 'systemadmin.training.update',
		'middleware' => 'roles',
		'roles' => ['System Admin'] 
	]);
});

