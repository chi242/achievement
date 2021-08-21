<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoalRequest;
use Illuminate\Http\Request;
use Auth;




class GoalController extends Controller
{
    
    public function index(Goal $goal)
    {
        
        
        return view('goal/index',['goal' => $goal]);
    }
    
    public function create(Goal $goal)
    {
        return view('goal/create');
    }
    
    public function store(Request $request , Goal $goal)
    {
        $goal = new \App\Models\Goal;
        $goal->user_id = Auth::id();
        $input = $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals');
        
    }
  
    
}




 



 