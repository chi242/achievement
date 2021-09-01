<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Plan;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoalRequest;
use Illuminate\Http\Request;
use Auth;



class GoalController extends Controller
{
    public function index(Goal $goal)
    {
        $goal = Goal::where('user_id',Auth::id())->orderby('id','desc')->select('maingoal','measurable','actionable','competent')->first();
        if(!isset($goal)){
            $maingoal = '未記入';
            $measurable = '未記入';
            $actionable = '未記入';
            $competent = '未記入';
            $goal_array = array($maingoal,$measurable,$actionable,$competent);
        }else{
        $maingoal = $goal->orderby('id','desc')->value('maingoal');
        $measurable = $goal->orderby('id','desc')->value('measurable');
        $actionable = $goal->orderby('id','desc')->value('actionable');
        $competent = $goal->orderby('id','desc')->value('competent');

        $goal_array = array($maingoal,$measurable,$actionable,$competent);
            
        }
        
        return view('goal/index',compact('goal_array'))->with(['goal' => $goal]);
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




 



 