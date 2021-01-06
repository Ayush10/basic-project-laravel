<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/welcome', function () {
//    return 'Hello World';
//});

//Route::get('/test', function () {
//    $name = request('name');
//
////    return $name;
//    return view('test', [
//        'name' => $name
//    ]);
//});

//Route::get('/test', function () {
//    return view('test', [
//        'name' => request('name')
//    ]);
//});

//Route::get('/posts/{post}', function () {
//    return view('post');
//});

//Route::get('/posts/{post}', function ($post) {
//    return $post;
//});

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.',
//    ];
//
//    return view('post', [
//        'posts' => $posts[$post],
//    ]);
//});

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.',
//    ];
//
//    return view('post', [
//        'posts' => $posts[$post] ?? 'nothing here yet',
//    ]);
//});

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.',
//    ];
//
//    if (! array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, this post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post],
//    ]);
//});

//Route::get('/posts/{post}', 'PostsController@show');
//
//Route::get('/contact', function() {
//    return view('contact');
//});

//Route::get('/about', function() {
//    return view('about');
//});

//Route::get('/about', function() {
//    $article = App\Models\Article::all();
//    $article = App\Models\Article::latest()->all();
//    $article = App\Models\Article::take(2)->get();
//    $article = App\Models\Article::paginate(2);

//    return $article;
//    return view('about');
//});

//Route::get('/about', function() {
//    $articles = App\Models\Article::latest()->all();
//
//    return view('about', [
//        'articles' => $articles
//    ]);
//});

//Route::get('/about', function() {
//    return view('about', [
//        'articles' => App\Models\Article::latest()->all()
//    ]);
//});

//Route::get('/about', function() {
//    return view('about', [
//        'articles' => App\Models\Article::take(3)->latest()->get()
//    ]);
//});

//Route::get('/articles', 'App\Http\Controllers\Api\ArticlesController@index');
//Route::post('/articles', 'App\Http\Controllers\Api\ArticlesController@store');
//Route::get('/articles/create', 'App\Http\Controllers\Api\ArticlesController@create');
//
//Route::get('/articles/{article}', 'App\Http\Controllers\Api\ArticlesController@show');
//Route::get('/articles/{article}/edit', 'App\Http\Controllers\Api\ArticlesController@edit');
//Route::get('/articles/{article}', 'App\Http\Controllers\Api\ArticlesController@edit');
//
//Route::get('/articles/create', 'App\Http\Controllers\Api\ArticlesController@create');
//Route::put('/articles/{articles}', 'App\Http\Controllers\Api\ArticlesController@update');

Route::get('articles', [ArticlesController::class, 'index']);
Route::post('articles', [ArticlesController::class, 'store']);
Route::get('articles/create', [ArticlesController::class, 'create']);

Route::get('articles/{article}', [ArticlesController::class, 'show']);
Route::get('articles/{article}/edit', [ArticlesController::class, 'edit']);
Route::get('articles/{article}', [ArticlesController::class, 'edit']);

Route::get('articles/create', [ArticlesController::class, 'create']);
Route::put('articles/{articles}', [ArticlesController::class, 'update']);





// use npm run watch to automatically compile scss to css

// GET /articles
// GET / articles/:id
// POST /articles
// PUT /articles/:id
// DELETE /articles/:id/


// GET /videos
// GET /videos/create
// POST /videos
// GET /videos/2
// GET /videos/2/edit
// PUT /videos/2
// DELETE /videos/2

// GET /videos/subscribe
// POST /videos/subscriptions => VideoSubscriptionsController@store