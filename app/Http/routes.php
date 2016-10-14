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

Route::get('/', 'BooksController@index');

Route::get('create', 'BooksController@create');

Route::post('create', 'BooksController@store');

Route::get('{book}/edit', 'BooksController@edit');

Route::patch('{book}/edit', 'BooksController@update');

Route::get('{book}/delete', 'BooksController@destroy');