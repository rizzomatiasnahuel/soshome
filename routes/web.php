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


 //Clear route cache:
 Route::get('/route-cache', function() {
	$exitCode = Artisan::call('route:cache');
	return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
	$exitCode = Artisan::call('config:cache');
	return 'Config cache cleared';
}); 

// Clear application cache:
Route::get('/clear-cache', function() {
	$exitCode = Artisan::call('cache:clear');
	return 'Application cache cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
	$exitCode = Artisan::call('view:clear');
	return 'View cache cleared';
});


// Start Rutas del Front 

//Route::get('/','FrontController@index');
Route::get('/',[
		'uses' => 'FrontController@index',
		'as' =>  'front.index'

]);


Route::get('imagesv' , [
	'uses' => 'ImagesController@index',
	'as' => 'images.index'	

]);

Route::get('quienessomos' , [
	'uses' => 'VistasController@v1',
	'as' => 'quienessomos'	

]);

Route::get('planesdeservicio' , [
	'uses' => 'VistasController@v2',
	'as' => 'planesdeservicio'	

]);


Route::get('contacto' , [
	'uses' => 'VistasController@v3',
	'as' => 'contacto'	

]);

Route::resource('articlesu','ArticlesUController');
Route::get('articlesu/{id}/destroy',[
		'uses' => 'ArticlesUController@destroy',
		'as'   => 'articlesu.destroy'
]);

					//	Route::get('/searchArticles','ArticlesController@searchArticles');	

//Route::get('/searchFrontcategory','FrontController@searchFrontcategory');

Route::get('showArticles/{id}/',[
	'uses' => 'ShowController@show1',
	'as'   => 'showArticles'
]);





//End Rutas del Front



Route::group(['prefix'=>'admin'], function(){

	


});





//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'ListController@index')->name('list');
//Route::get('/list/mobile', 'ListController@mobile')->name('mobileList');

//Route::get('/list/create/{name}/{price}/{number}', 'ListController@create')->name('create');
//Route::get('/list/update/{id}/{name}/{price}/{number}', 'ListController@update')->name('update');
//Route::get('/list/delete/{id}', 'ListController@delete')->name('deleteList');

//Route::get('/register/mobile/{name}/{password}/{email}', 'RegistermController@create')->name('mobileM');

Auth::routes();
Auth::routes();



Route::get('/home', 'HomeController@home');

Route::group(['middleware' => 'home'], function () {
					Route::get('/homeu', 'HomeController@homeu');

});

Route::get('verperfil',[
	'uses' => 'PerfilController@verperfil',
	'as'   => 'verperfil'
]);

Route::get('perfil/{id}',[
	'uses' => 'PerfilController@edit',
	'as'   => 'perfil.edit'
]);

Route::resource('perfil','PerfilController');

Route::resource('valoraciones','ValoracionController');

Route::get('valoracionescrear','ValoracionController@create');




Route::group(['middleware' => 'admin'], function () {
   
						
	Route::resource('ValoracionesAdmin','ValoracionesAdminController');
	Route::resource('OrdenesAdmin','OrdenesAdminController');




						Route::resource('users','UsersController');
						Route::get('users/{id}/destroy',[
								'uses' => 'UsersController@destroy',
								'as'   => 'users.destroy'
						]);

					
						Route::resource('ArticleAdmin','ArticleAdminController');

						

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


					
		
						

   
});

		Route::get('cates/{id}',[
			'uses' => 'FilterController@searchFrontcategory',
			'as' =>  'front.search.category'

		]);


	Route::resource('cates','CatesController');

	Route::get('cates/{id}/destroy',[
		'uses' => 'CatesController@destroy',
		'as'   => 'cates.destroy'
]);



	Route::resource('categories','CategoriesController');
//	Route::get('categories/{id}/destroy',[
//		'uses' => 'CategoriesController@destroy',
//		'as'   => 'categories.destroy'
//	]);

//	Route::get('categories/{id}',[
//		'uses' => 'FilterController@searchFrontcategory',
//		'as' =>  'front.search.category'

//		]);

Route::resource('products','ProductsController');

Route::resource('in_shopping_carts','InShoppingCartsController');


//--------------------->Carrito


Route::group(['middleware' => 'web'], function () {
    
        
 
Route::get('cart/show',[
		'as'=> 'cart-show',
		'uses'=>'CartController@show'
]);	

Route::get('cart/add/{article}',[
	'as'=> 'cart-add',
	'uses'=>'CartController@add'
]);	

Route::get('cart/destroy/{article}',[
	'as'=> 'cart-destroy',
	'uses'=>'CartController@destroy'
]);	

Route::get('cart/trash',[
	'as'=> 'cart-trash',
	'uses'=>'CartController@trash'
]);	

Route::post('cart/update',[
	'as'=> 'cart-update',
	'uses'=>'CartController@update'
]);


Route::get('order/detail',[
	'as'=> 'order-detail',
	'uses'=>'CartController@orderDetail'
]);	

Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PayPalController@postPayment',
));

Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PayPalController@getPaymentStatus',
));


//--------------------->Alertas
Route::get('message', array(
	'as' => 'message',
	'uses' => 'MessageController@m1',
));

Route::get('message2', array(
	'as' => 'message2',
	'uses' => 'MessageController@m2',
));

Route::get('message3', array(
	'as' => 'message3',
	'uses' => 'MessageController@m3',
));


Route::resource('misordenes','OrdersController');


Route::get('detalledesordenes/{id}/',[
	'uses' => 'OrdersItemsController@index',
	'as'   => 'detalledesordenes'
]);


});