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
Route::model('user', 'App\User');

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

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::resource('user','UserController', ['only' => ['index', 'show']]);
});

Route::get('conversations', ['as' => 'conversations', 'uses' => 'ConversationsController@index']);

Route::get('messages/{conv_id}', ['as' => 'messages', 'uses' => 'ConversationsController@getMessages']);
Route::post('messages/{conv_id}/ajout', ['as' => 'message.add', 'uses' => 'ConversationsController@addMessage']);
