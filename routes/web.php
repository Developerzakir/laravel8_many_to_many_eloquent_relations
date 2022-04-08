<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

     //single one post display 
    // $post = Post::find(1);
    // return $post;
    
    //all post display
    // $post = Post::all();
    // return $post;

   //post and post related category display
    // $post = Post::with('categories')->get();
    // return $post;

    //post & category display with blade file
    // $posts = Post::with('categories')->get();
   

    return view('welcome', compact('posts'));
});
