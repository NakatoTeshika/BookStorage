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

// Route::get('/', function () {
//     return view('welcome');
// });
// Добавлять книги, авторов, выводить книги и их авторов. Вывести книги, у которых более трех авторов...
Route::resource('books', 'BookController');
// Route::get('books/author','AuthorBookController@getBooksByAuthor')->name('authbook.show');
Route::resource('authors', 'AuthorController');
// Route::get('books', 'BookController@allBooks')->name('books');


// Route::get('books/newBook', 'BookController@newBook')->name('books.create');



// Route::post('books',)