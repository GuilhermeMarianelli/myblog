<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostForm;
use App\Http\Requests\EditPostForm;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();

        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostForm $request)
    {
       $user_id = Auth::user()->id;
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = str_slug($request->title,'-');
        $post->user_id = $user_id;
        $post->save();

        $post->categories()->sync($request->category);

        return redirect('admin/posts/create')->with('status','The post has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::whereId($id)->firstOrFail();
        $categories = $post->categories()->pluck('name')->toArray();
        $user_name = Auth::user()->name;
        return view('admin.posts.show',compact('post','categories','user_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::whereId($id)->firstOrFail();
        $selected_category = $post->categories()->pluck('name')->toArray();
        $categories = Category::all();

        return view('admin.posts.edit',compact('post','selected_category','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostForm $request, $id)
    {
        $post = Post::whereId($id)->firstOrFail();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = Str::slug($request->title,'-');
        $post->save();

        $post->categories()->sync($request->category);

        return redirect(action('Admin\PostsController@edit',$post->id))->with('status','This post has been modified successfully!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
