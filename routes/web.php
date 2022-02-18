<?php

use App\Models\Post;
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
    $posts = Post::all();

    ddd($posts);
    
    return view('posts', [
        'posts' => $posts
    ]);
});


Route::get('posts/{post}', function ($slug) {

    $post = Post::find($slug);

    return view('posts', [
        'post' => Post::find($slug)
    ]);

}); 


// ->where('post', '[A-z]+')

/* abort(404);  404 error*/