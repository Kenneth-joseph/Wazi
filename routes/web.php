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

// Route::get('/', function () {
//     //return view('welcome');
//     return 'hello world';
// });
Route::get('/', 'PagesController@index');
Route::get('/availability', 'PagesController@available');
Route::get('/createc', 'PagesController@create_content');
Route::get('/images','PagesController@imgpic');
Route::get('/text','PagesController@mytext');
Route::get('/vedio','PagesController@myvedio');

// use App\Http\Controllers\contentsController;

// Route::get('/create','contentsController@create_content');  //controller styles for urls and routes


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



