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
        $goal = \App\Models\Goal::where('user_id',Auth::id())->orderby('id','desc');
        $maingoal = $goal->first(['maingoal'])->toArray();
        $measurable = $goal->first(['measurable'])->toArray();
        $actionable = $goal->first(['actionable'])->toArray();
        $competent = $goal->first(['competent'])->toArray();
         return view('goal/index',compact('maingoal','measurable','actionable','competent'))->with(['goal' => $goal]);
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




 



 