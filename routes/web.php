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


// Start Rutas del Front 

//Route::get('/','FrontController@index');
Route::get('/',[
		'uses' => 'FrontController@index',
		'as' =>  'front.index'

]);


Route::get('categories/{id}',[
		'uses' => 'FilterController@searchFrontcategory',
		'as' =>  'front.search.category'

]);
//Route::get('/searchFrontcategory','FrontController@searchFrontcategory');




//End Rutas del Front



//Route::group(['prefix'=>'admin'], function(){

		Route::resource('users','UsersController');
		Route::get('users/{id}/destroy',[
				'uses' => 'UsersController@destroy',
				'as'   => 'users.destroy'
		]);



		Route::resource('categories','CategoriesController');
		Route::get('categories/{id}/destroy',[
						'uses' => 'CategoriesController@destroy',
						'as'   => 'categories.destroy'
				]);


		Route::resource('tags','TagsController');
		Route::get('tags/{id}/destroy',[
						'uses' => 'TagsController@destroy',
						'as'   => 'tags.destroy'
				]);

		Route::get('/search','TagsController@search');	

		
		Route::resource('articles','ArticlesController');

		Route::get('articles/{id}/destroy',[
						'uses' => 'ArticlesController@destroy',
						'as'   => 'articles.destroy'
				]);
		
		Route::get('/searchArticles','ArticlesController@searchArticles');	

		Route::get('imagesv' , [
			'uses' => 'ImagesController@index',
			'as' => 'images.index'	

		]);




//});





//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'ListController@index')->name('list');
//Route::get('/list/mobile', 'ListController@mobile')->name('mobileList');

//Route::get('/list/create/{name}/{price}/{number}', 'ListController@create')->name('create');
//Route::get('/list/update/{id}/{name}/{price}/{number}', 'ListController@update')->name('update');
//Route::get('/list/delete/{id}', 'ListController@delete')->name('deleteList');

//Route::get('/register/mobile/{name}/{password}/{email}', 'RegistermController@create')->name('mobileM');

Auth::routes();
Auth::routes();

Route::resource('products','ProductsController');




Route::get('/home', 'HomeController@index')->name('home');
