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

Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/posts/{id}','PostController@show');


Auth::routes([
                'register'=>false,
                'reset' => false,
                'verify' => false]);
Route::post('/posts','PostController@store')->name('posts.store')->middleware('auth');
Route::get('/posts','PostController@create')->middleware('auth');
Route::delete('/posts/{id}','PostController@destroy')->name('posts.destroy')->middleware('auth');
