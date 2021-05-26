<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Todo;
use App\Http\Requests\ReviewRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;



class ReviewController extends Controller
{
    public function create(Todo $todo)
     {
        return view('review/create')->with(['todo' => $todo]);
    }
    
    public function store(Request $request, Review $review)
    {   
    
        $input = $request['review'];
        $review->fill($input)->save();
        //  $review = Review::find($request->id);
        //  $review->fill($request->all())->save();
        return redirect('/reviews/' . $review->id);
        
    }
    
    public function show(Review $review, Todo $todo)
    {
        return view('review/show')->with(['review' => $review])->with(['todo' => $todo]);
    }
     
    public function edit(Review $review)
    {
        return view('review/edit')->with(['review' => $review]);
    }
    
    public function update(Request $request, Review $review)
    {

        $input= $request['review'];
        $review->fill($input)->save();
        return redirect('/reviews/' . $review->id); 
    }
    
    
    
    public function delete(Review $review){
        $review->delete();
        return redirect('review/create');
    }
    
    
}
