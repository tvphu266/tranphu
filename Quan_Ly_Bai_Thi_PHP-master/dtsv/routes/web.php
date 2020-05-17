<?php

use Illuminate\Support\Facades\Route;

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
Route::get('class','ClassController@get');
Route::post('class','ClassController@store');
// Route::view('class','class');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/transcript', 'HomeController@transcript')->name('transcript');
Route::get('/question', 'HomeController@question')->name('question');
Route::get('/usermanager', 'HomeController@usermanager')->name('usermanager');



Route::prefix('/user')->middleware('can:act-user')->group(function(){
	
	Route::get('/', 'UserController@index');
	Route::get('/create', 'UserController@create');
	Route::get('/search', 'UserController@search');

});