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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/posts/{post}', 'PostsController@show')->name('home');

Route::get('/posts', 'PostsController@show')->name('home');

Route::get('/simple', function(){
	return view('simple');
});

Route::get('/about', function(){
	return view('about', [
		//'articles' => App\Article::take(2)->latest()->get()
		'articles' => App\Article::latest()->get()
	]);
});

// Route::get('/articles', function(){
// 	return view('articles', [
// 		//'articles' => App\Article::take(2)->latest()->get()
// 		'articles' => App\Article::latest()->get()
// 	]);
// });

Route::get('/articles', 'ArticleController@index')->name('article.index');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/create', 'ArticleController@create');
Route::get('/articles/{article}', 'ArticleController@show')->name('article.show');
Route::get('/articles/{article}/edit', 'ArticleController@edit');
Route::put('/articles/{article}', 'ArticleController@update');
Route::post('best-reply/{reply}', 'ReplyController@store');