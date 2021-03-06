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

Route::get('/', 'BooksController@bestSeller');
Route::get('/books', 'BooksController@index');
Route::get('/books/add-book', 'BooksController@create');
Route::post('/books/add-book', 'BooksController@store');
Route::get('/books/{id}', 'BooksController@show');
Route::delete('/books/{id}', 'BooksController@destroy');
