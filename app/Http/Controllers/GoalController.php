<?php

namespace App\Http\Controllers;



use App\Models\Goal;
use App\Models\Diary;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class GoalController extends Controller
{
    public function index(Goal $goal , Diary $diary)
    {
        return view('index')->with(['goal' => $goal])->with(['diary' => $diary])->with(['diaries' => $diary]); 
    }
    
    public function details(Goal $goal)
    {
        return view('goal/details')->with(['goal' => $goal]);
    }
    
    public function create(Goal $goal)
    {
        return view('goal/create');
    }
    
    public function store(Request $request , Goal $goal)
    {
       $input = $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals/details/' . $goal->id);
    }
    
    public function edit(Goal $goal)
    {
        return view('/goal/creedit')->with(['goal' => $goal]);
    }
    
    public function update(Request $request , Goal $goal)
    {
        $input_goal= $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals/details/' . $goal->id);
    }
}




 



 