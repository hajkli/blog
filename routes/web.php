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
use \illuminate\Http\Request;


Route::get('/users/{user}', function (App\User $user) {
    return $user->email;
});

Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index');
Route::get('/post/{$id}', 'PostController@show');
Route::resource('post', 'PostController');
Route::get('test', function(){
    return view('layouts.app');
});

Auth::routes();

