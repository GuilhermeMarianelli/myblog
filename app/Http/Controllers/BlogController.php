<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class BlogController extends Controller
{
    public function home()
    {
    	$posts = Post::all();

    	return view('home',compact('posts'));
    }

    public function show($slug)
    {
    	$post = Post::whereSlug($slug)->firstOrFail();
    	$selected_categories = $post->categories()->pluck('name')->toArray();

    	return view('show',compact('post','selected_categories'));
    }

}
