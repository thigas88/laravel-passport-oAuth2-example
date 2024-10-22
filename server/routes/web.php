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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', ['as' => 'home', 'uses' => 'App\Http\Controllers\HomeController@index']);

Route::get('/posts', ['as' => 'posts', 'uses' => 'App\Http\Controllers\PostsController@index']);

Route::get('/developers', ['as' => 'developers', 'uses' => 'App\Http\Controllers\DevelopersController@index']);
