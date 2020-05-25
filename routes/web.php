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


// Route::get('/', 'PostController@index')->name('posts.index');
// Route::get('/published', 'PostController@indexPublished')->name('posts.published');
Route::resource('posts', 'PostController');
Route::resource('photos', 'PhotoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
