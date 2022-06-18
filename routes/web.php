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
    return view('posts');
});

Route::get('posts/{post}',function ($slug){
    return $slug;
    // $post = __DIR__.'\..\resources\posts\my-first-post.html';
    // return view('post', [
    //     'post' => file_get_contents($post)
    // ]);
});