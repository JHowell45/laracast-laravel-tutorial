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

Route::get('/', function () {
	return view('welcome');
});

// Route::get('/string', function () {
//     return 'hello world';
// });

// Route::get('/array', function () {
//     return ['foo' => 'bar'];
// });

// Route::get('/test', function () {
//     return view('test');
// });


// Route::get('/', function () {
//     return view('test', [
//       'name' => request('name')
//     ]);
// });


// Route::get('/posts/{post}', function () {
//   return view('post');
// });

// Episode 8 -- Using controllers
Route::get('posts/{post}', 'PostsController@show');

// Episode 14 -- Layout Pages
Route::get('/contact', function () {
	return view('contact');
});

Route::get('/about', function () {
	return view('about', [
		'articles' => App\Article::take(3)->latest()->get()
	]);
});

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::post('/articles', 'ArticlesController@store');
Route::update('/articles/{article}', 'ArticlesController@update');
Route::delete('/articles/{article}', 'ArticlesController@delete');
