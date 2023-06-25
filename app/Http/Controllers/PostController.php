<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StorePostRequest;

class postcontroller extends Controller
{
    public function index()
    {

        $posts = Post::all();
    
        return view('posts.index' , [
            'posts' => $posts,
        ]);
    }


    public function show()
    {
        $request = request();
        $postid = $request->post;
        $post = post::find($postid);
        return view('posts.show' , [
            'post' => $post,
        ]);
    }


    public function create()
    {
        $users= User::all();
        return view('posts.create' , [
            'users' => $users,
        ]);
    }


    public function store(StorePostRequest $request )
    {
        post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
        ]);
        return redirect()->route('posts.index');
    }
}