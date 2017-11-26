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

Route::get('/', 'HomeController@index');

/**
 * Login
 */

Route::Auth();


/**
 * Room group - include show, create, store, join, destroy,
 */

Route::group(['prefix' => 'rooms', 'namespace' => 'Room', 'middleware' => 'auth'], function() {
    Route::get('/', 'MainController@index');
    Route::get('/join', 'MainController@ask');
    Route::post('/join', 'MainController@join');
    Route::resource('room', 'RoomController');
});


Route::get('/home', 'HomeController@index')->name('home');

/**
 * Message Conntent
 */
Route::get('/messages', 'MessageController@index');
Route::post('/message', 'MessageController@store');
Route::delete('/message/{message}', 'MessageController@destroy');


Route::get('/room', 'RoomController@index');

Route::get('/new-comment', 'NewCommentController@index');
Route::post('/new-comment', 'NewCommentController@newComment');
Route::delete('/new-comment/{id}', 'NewCommentController@delete');

Route::get('/timer', 'TimerController@index');
