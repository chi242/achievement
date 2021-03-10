<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Goal;
use App\Models\Diary;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;


class GoalController extends Controller
{
    public function index(Goal $goal , Diary $diary)
    {
        return view('index');
    }
    
    public function details(Goal $goal)
    {
        return view('details');
    }
    
    public function create(Goal $goal)
    {
        return view('create');
    }
    
    public function store(Request $request, Goal $goal)
    {
        $input = $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals/details' . $goal->id);
    }
    
    public function creedit(Goal $goal)
    {
        return view('creedit');
    }
    
    public function update(Request $request, Goal $goal)
    {
        $input_goal= $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals/details' . $goal->id);
    }
}


 



 