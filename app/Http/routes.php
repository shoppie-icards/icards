<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('merchant-login' , 'Auth\AuthController@getLogin');
Route::post('auth/login' , 'Auth\AuthController@postLogin');
Route::get('logout' , 'Auth\AuthController@getLogout');


Route::get('register' , 'Auth\AuthController@getRegister');
Route::post('register' , 'Auth\AuthController@postRegister');

Route::get('active/{token}' , 'Auth\AuthController@activeAccount');


// Check Authenticate manage
Route::get('manage' , 'ManageController@index');

//Prefix http://host/merchant
Route::group(['middleware'=>'auth'], function(){
	Route::group(['prefix'=>'/merchant'], function(){

		Route::get('/' , 'MerchantController@index');
		
		Route::get('initialize-card' , 'InitializeCardController@index');
		Route::post('create-merchant' , 'InitializeCardController@store');

		Route::get('send-messages' , 'MessagesController@index');

		Route::get('create-incentives' , 'IncentivesController@index');

		Route::get('feedback' , 'FeedbackController@index');

		Route::get('account-manage' , 'AccountManageController@index');
		Route::get('detail' , 'AccountManageController@memberDetail');

		Route::get('analytics' , 'AnalyticsController@index');
	});
});
