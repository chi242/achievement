<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DiaryController extends Controller
{
    public function create(Diary $diary)
     {
        return view('diary/create')->with(['diary' => $diary]);
    }
    
    public function store(Request $request,Diary $diary)
    {
        $input = $request['diary'];
        $diary->fill($input)->save();
        return redirect('/diaries/' . $diary->id);
    }
     
    public function edit(Diary $diary)
    {
        return view('diary/edit')->with(['diary' => $diary]);
    }
    
   public function update(Request $request,Diary $diary, $input)
    {
        $input = $request['diary'];
        $diary->fill($input)->save();
        return redirect('/diaries/' . $diary->id); 
    }
    
    public function index(Diary $diary)
    {
        return view('diary/index')->with(['diary' => $diary]);
    }
}
