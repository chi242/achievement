<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\ReviewRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    public function create(Diary $diary)
     {
        return view('diary/review/create')->with(['diary' => $diary]);
    }
    
    public function store(DiaryRequest $request,Diary $diary)
    {
        $input_diary = $request['diary'];
        $diary->fill($input_diary)->save();
        return redirect('/diaries/' . $diary->id);
    }
     
    public function edit(Diary $diary)
    {
        return view('diary/todo/edit')->with(['diary' => $diary]);
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
        return view('diary/todo/show')->with(['diary' => $diary]);
    }
    
    public function delete(Diary $diary){
        $diary->delete();
        return redirect('diaries/create');
    }
    
    
}
