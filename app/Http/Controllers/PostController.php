<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index');
    }
    public function details(Post $post)
    {
        return view('details');
    }
    public function create(Post $post)
    {
        return view('create');
    }
    public function store(Request $request, Post $post)
    {
    $input = $request['post'];
    $post->fill($input)->save();
        return redirect('/posts/details' . $post->id);
    }
    public function creedit(Post $post)
     {
        return view('creedit');
    }
    public function showedit(Post $post)
     {
        return view('showedit');
    }
    public function update(Request $request, Post $post)
    {
    $input_post= $request['post'];
    $post->fill($input)->save();
        return redirect('/posts/details' . $post->id);
    }
      public function show(Post $post)
     {
        return view('show');
    }
    
   
    
}


 



 