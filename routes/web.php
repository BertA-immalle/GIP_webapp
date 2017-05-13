<?php

use App\Comment;

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

Route::get('/home', function () {
    $comments = Comment::all();

    return view('home', compact('comments'));
});

Route::post('/home', function () {
    $new_comment = new Comment;
    $new_comment->content = request('content');
    $new_comment->save();
    return redirect('/');
});
