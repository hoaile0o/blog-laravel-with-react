<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');
Route::get('detail/{post_id}','Api\DetailController@index')->middleware('cors');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
GET http://localhost/project/api/posts // this will call index function
POST http://localhost/project/api/posts // this will call store function
GET http://localhost/project/api/posts/1 // this will call show method with 1 as arg
PUT http://localhost/project/api/posts/1 // this will call update with 1 as arg
DELETE http://localhost/project/api/posts/1 // this will call destroy with 1 as arg
*/
Route::resource('posts', 'api\PostsController', array('only' => array('index', 'store', 'show', 'update', 'destroy')))->middleware('cors');