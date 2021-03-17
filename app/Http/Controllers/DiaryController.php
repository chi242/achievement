<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DiaryController extends Controller
{
    public function show(Diary $diary)
     {
        return view('diary/show')->with(['diary' => $diary]);
    }
    
    public function store(Request $request,Diary $diary)
    {
        $input = $request['diary'];
        $diary->fill($input)->save();
        return redirect('/diaries/show/' . $diary->id);
    }
     
    public function edit(Diary $diary)
    {
        return view('diary/showedit')->with(['diary' => $diary]);
    }
    
    public function update(Request $request, Diary $diary)
    {
        $input_post= $request['diary'];
        $diary->fill($input)->save();
        return redirect('/diaries/show' . $diary->id);
    }
}