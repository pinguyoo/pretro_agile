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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/room', 'RoomController@index');

Route::get('/new-comment', 'NewCommentController@index');
Route::post('/new-comment', 'NewCommentController@newComment');
Route::delete('/new-comment/{id}', 'NewCommentController@delete');
