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
Route::model('conversation', 'App\conversations');
Route::model('user', 'App\User');
Route::get('/', function () {
    return redirect(route('home'));
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
    Route::get('/home',['as' => 'home', 'uses' => 'HomeController@index'] );
    Route::get('/admin',['as' => 'admin.index', 'uses' => 'AdminController@index']);
    Route::get('/admin/create',['as' => 'admin.activity.create', 'uses' => 'AdminController@create']);
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/activities', ['as' => 'activities.index', 'uses' => 'ActivitiesController@index']);
        Route::get('/activities/create', ['as' => 'activities.create', 'uses' => 'ActivitiesController@create']);
        Route::post('/activities/store', ['as' => 'activities.store', 'uses' => 'ActivitiesController@store']);
        Route::post('/activities/more', ['as' => 'activities.more', 'uses' => 'ActivitiesController@more']);
        Route::get('/activities/perso', ['as' => 'activities.perso', 'uses' => 'ActivitiesController@perso']);
        Route::get('/activities/{activity}/add', ['as' => 'activities.add', 'uses' => 'ActivitiesController@add']);
        Route::resource('user', 'UserController', ['only' => ['index', 'show']]);
        
        
        Route::resource('conversation', 'ConversationsController', ['only' => ['index', 'show', 'delete']]);
        Route::get('conversation/create/{user}', ['as' => 'conversation.create', 'uses' => 'ConversationsController@create']);
        /*Route::get('conversations', ['as' => 'conversations', 'uses' => 'ConversationsController@index']);
        Route::get('conversations/{conv_id}', ['as' => 'conversations.show', 'uses' => 'ConversationsController@getMessages']);*/
        Route::post('conversation/{conversation}/ajout', ['as' => 'conversation.add', 'uses' => 'ConversationsController@addMessage']);
        Route::get('conversation/{conversation}/delete', ['as' => 'conversation.delete', 'uses' => 'ConversationsController@deleteConversation']);
    });
});


