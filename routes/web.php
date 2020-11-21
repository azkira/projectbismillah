<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/novels', 'BooksController@novel');

Route::get('/comics', 'BooksController@comic');

Route::get('/philosophy', 'BooksController@philosophy');

Route::get('/psychology', 'BooksController@psychology');

Route::get('/allcateg', 'BooksController@index');

Route::get('/books/{book}', 'BooksController@show');

Route::get('/user/{id}', 'ReadersController@profile')->name('user.profile');

Route::get('/search', 'BooksController@search');

Route::get('/sort', 'BooksController@sort');

Route::get('/addReview', 'HomeController@showReview');

Route::post('addReview', 'HomeController@addReview');

//Route::post('/upload', 'ReadersController@upload');

Route::get('/profile', 'ReaderProfileController@profile')->middleware('auth')->name('user.profile');

Route::post('/profile', 'ReaderProfileController@update_avatar')->middleware('auth')->name('user.update_avatar');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});
