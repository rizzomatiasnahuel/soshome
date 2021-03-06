<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/* Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PayPalController@postPayment',
));

Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PayPalController@getPaymentStatus',
));
 */

Route::get('users/', function (App\Models\User $user) {
    return $user;
});



Route::get('usersApi', 'UsersApiController@getAllUsersApi');
Route::get('usersApi/{id}', 'UsersApiController@getSUsersApi');
Route::get('usersApic', 'UsersApicController@create');
Route::put('usersApi/{id}', 'UsersApiController@updateUsersApi');
Route::delete('usersApi/{id}','UsersApiController@deleteUsersApi');