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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('comments', function () {

    $comments = DB::table('comments')->oldest()->get();

    return view('user.comments', compact('comments'));
});

Route::get('comments/{comment}', function ($id) {

    $comment = DB::table('comments')->find($id);

    dd($id);

    return view('user.comments', compact('comments'));
});
