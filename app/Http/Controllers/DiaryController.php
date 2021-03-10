<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function show(Post $post)
     {
        return view('show');
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/details' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('edit');
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post= $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/details' . $post->id);
    }
}