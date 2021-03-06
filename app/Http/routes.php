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




Route::group(['middleware' => ['web']], function () {
    
    
    
//    Route::get('/', function () {
//    return view('index');
//});

Route::get('/admin', function () {
    return view('adminLayout');
});

Route::get('/test', function () {
    return view('blog-single');
});


Route::get('/', function () {
    return view('layout');
});

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/admin/category', 'CategoryController@show');
Route::get('/admin/category/add', 'CategoryController@create');
Route::post('/admin/category/add', 'CategoryController@create');
Route::post('/admin/category/store', 'CategoryController@store');
Route::get('/admin/category/show', 'CategoryController@show');
Route::get('/admin/category/edit/{id}', 'CategoryController@edit');
Route::post('/admin/category/update/{id}', 'CategoryController@update');
Route::get('/admin/category/destroy/{id}', 'CategoryController@destroy');


Route::get('/admin/post', 'PostController@show');
Route::get('/admin/post/show', 'PostController@show');
Route::post('/admin/post/add', 'PostController@create');
Route::post('/admin/post/store', 'PostController@store');
Route::get('/admin/post/edit/{id}', 'PostController@edit');
Route::post('/admin/post/update/{id}', 'PostController@update');
Route::get('/admin/post/destroy/{id}', 'PostController@destroy');


Route::get('/admin/contactInfo/show', 'ContactInfoController@show');
Route::post('/admin/contactInfo/add', 'ContactInfoController@create');
Route::post('/admin/contactInfo/store', 'ContactInfoController@store');
Route::get('/admin/contactInfo/edit', 'ContactInfoController@edit');
Route::post('/admin/contactInfo/update', 'ContactInfoController@update');


/********* normal user routes **************************/

Route::get('/', 'PostController@indexBlog');
Route::get('blogSingle/{id}', 'PostController@blogSingle');

Route::get('contact', 'ContactInfoController@clientShow');

Route::get('blog', 'PostController@showAll');









});








