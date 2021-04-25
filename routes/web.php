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

Route::get('/', "HomeController@index");

Route::group(['prefix' => 'post'], function () {
    Route::get('/{id?}', "PostController@index")->where('id', '[0-9]?');
    Route::get('/detail/{id}', 'PostController@show')->where('id', '[0-9]+');
    Route::post('/', "PostController@store");
    Route::get('/add', 'PostController@create');
});

Route::group(['prefix' => 'user'],function(){
    Route::get('/{uid?}', 'UserController@index');
    Route::get('/set', 'UserController@setting');
    Route::get('/message', 'UserController@message');
});

Route::get('/queue', function() {
    $user = \App\User::find(1);
    dispatch(new \App\Jobs\SendEmail($user));
    return "finish";
});
