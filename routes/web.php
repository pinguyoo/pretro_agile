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
Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@newMember');
Route::get('/register_finish','RegisterController@finish');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
