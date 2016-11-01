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

Route::get('/admin', function () {
    return view('adminLayout');
});


Route::get('/admin/category/add', 'CategoryController@create');
Route::post('/admin/category/add', 'CategoryController@create');
Route::post('/admin/category/store', 'CategoryController@store');
Route::get('/admin/category/show', 'CategoryController@show');
//Route::post('/admin/category/show', 'CategoryController@show');






