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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//the web pages or views
Route::get('/addItems',function (){
    return view('add_items');
});

Route::get('/soldItems',function (){
   return view('sold_items');
});

Route::get('/addUser',function (){
   return view('addUser');
});

Route::get('/users','usersController@show');

//the actions
Route::post('/addUser','usersController@addUser');//add new user

