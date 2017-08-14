<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', 'IndexController@index');
Route::get('/learn/oneToOne', 'IndexController@oneToOne');
Route::get('/learn/oneToMany', 'IndexController@oneToMany');
Route::get('/learn/manyToMany', 'IndexController@manyToMany');
Route::get('/learn/hasManyThrough', 'IndexController@hasManyThrough');
Route::get('/learn/polymorphicRelations', 'IndexController@polymorphicRelations');
Route::get('/learn/manyToManyPolymorphicRelations', 'IndexController@manyToManyPolymorphicRelations');
