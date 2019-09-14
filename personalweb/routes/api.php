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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//CRUD Tag
Route::get('/tag', 'TagController@getApi');

Route::post('/tag', 'TagController@tambahApi');

Route::put('/tag/{id}', 'TagController@updateApi');

Route::delete('/tag/{id}', 'TagController@deleteApi');
//Tutup

//CRUD Blog
Route::get('/blog', 'BLogController@getApi');

Route::post('/blog', 'BlogController@tambahApi');   

Route::put('/blog/{id}', 'BlogController@updateApi');

Route::delete('/blog/{id}', 'BlogController@deleteApi');
//Tutup

Route::post('register/user', 'UserController@register');

Route::post('login/user', 'UserController@login');

Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');