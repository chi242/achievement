<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Http\Requests\DiaryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DiaryController extends Controller
{
    public function create(Diary $diary)
     {
        return view('diary/create')->with(['diary' => $diary]);
    }
    
    public function store(DiaryRequest $request,Diary $diary)
    {
        $input_diary = $request['diary'];
        $diary->fill($input_diary)->save();
        return redirect('/diaries/' . $diary->id);
    }
     
    public function edit(Diary $diary)
    {
        return view('diary/edit')->with(['diary' => $diary]);
    }
    
   public function update(DiaryRequest $request,Diary $diary)
    {
        $input_diary= $request['diary'];
        $diary->fill($input_diary)->save();
        return $diary;
        // return redirect('/diaries/' . $diary->id); 
    }
    
    public function show(Diary $diary)
    {
        return view('diary/show')->with(['diary' => $diary]);
    }
}
