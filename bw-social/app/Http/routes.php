<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::model('activity', 'App\Activity');
Route::model('conv_id', 'App\conversations');
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    //Route::ressource('user','UserController');
    Route::get('/home', 'HomeController@index');
    Route::get('/activities', ['as' => 'activities.index', 'uses' => 'ActivitiesController@index']);
    Route::get('/activities/create', ['as' => 'activities.create', 'uses' => 'ActivitiesController@create']);
    Route::post('/activities/store',['as' => 'activities.store', 'uses' => 'ActivitiesController@store']);
    Route::post('/activities/more',['as' => 'activities.more', 'uses' => 'ActivitiesController@more']);
    Route::get('/activities/perso', ['as' => 'activities.perso', 'uses' => 'ActivitiesController@perso']);
    Route::get('/activities/{activity}/add', ['as' => 'activities.add', 'uses' => 'ActivitiesController@add']);
});
Route::get('conversations', ['as' => 'conversations', 'uses' => 'ConversationsController@index']);

Route::get('messages/{conv_id}', ['as' => 'messages', 'uses' => 'ConversationsController@getMessages']);
Route::post('messages/{conv_id}/ajout', ['as' => 'message.add', 'uses' => 'ConversationsController@addMessage']);
