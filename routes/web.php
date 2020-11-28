<?php

use App\Http\Controllers\ReadersController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/alphabetsort', 'BooksController@sorthome');

Route::get('/home/reversesort', 'BooksController@sorthomedesc');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/allcateg', 'BooksController@index');

Route::get('/novels', 'BooksController@novel');

Route::get('/novels/alphabetsort', 'BooksController@sortnovel');

Route::get('/novels/reversesort', 'BooksController@sortnoveldesc');

Route::get('/comics', 'BooksController@comic');

Route::get('/comics/alphabetsort', 'BooksController@sortcomic');

Route::get('/comics/reversesort', 'BooksController@sortcomicdesc');

Route::get('/philosophy', 'BooksController@philosophy');

Route::get('/philosophy/alphabetsort', 'BooksController@sortphilosophy');

Route::get('/philosophy/reversesort', 'BooksController@sortphilosophydesc');

Route::get('/psychology', 'BooksController@psychology');

Route::get('/psychology/alphabetsort', 'BooksController@sortpsychology');

Route::get('/psychology/reversesort', 'BooksController@sortpsychologydesc');

Route::get('/books/{book}', 'BooksController@show');

Route::post('/books/{book}', 'BooksController@addReview');

Route::get('/search', 'BooksController@search');

Route::get('/search?search={search}', 'BooksController@sortsearch');

Route::get('/search/reversesort', 'BooksController@sortsearchdesc');

Route::get('/user/{id}', 'ReadersController@profile')->name('user.profile');

Route::get('/profile', 'ReaderProfileController@profile')->middleware('auth')->name('user.profile');

Route::post('/profile', 'ReaderProfileController@update_avatar')->middleware('auth')->name('user.update_avatar');

Route::get('/addbook', 'UploadBooksController@addBook')->middleware('auth')->name('user.addbook');

Route::post('/addbook', 'UploadBooksController@addBook')->middleware('auth')->name('user.addbook');

Route::delete('/profile', 'ReadersController@destroy')->middleware('auth')->name('user.delete');
