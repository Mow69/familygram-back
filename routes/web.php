<?php

use Illuminate\Support\Facades\Auth;
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

// POSTS

Route::get('/posts', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/like', 'PostsController@like');

Route::post('/posts/{post}/unlike', 'PostsController@unlike');

Route::get('/', 'PagesController@welcome');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
