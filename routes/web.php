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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Hello Watson!';
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    $name = request('name');

    return view('test', [
        'name' => $name
    ]);
});
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello this is my first post',
        'my-second-post' => 'Hello this is my second post'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post does not exist');
    }

    return view('post', [
        'posts' => $posts[$post]
    ]);
});


*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
