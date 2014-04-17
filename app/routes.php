<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Root route
Route::get('/', array('as' => 'welcome', 'uses' => 'PostsController@index'));

// Post routes
Route::resource('posts', 'PostsController',
				array('only' => array('index', 'show')));
// Author routes
Route::resource('authors', 'AuthorsController',
				array('only' => array('show')));