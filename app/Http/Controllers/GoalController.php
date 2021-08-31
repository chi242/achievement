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
        $goal = Goal::where('user_id',Auth::id())->orderby('id','desc');
        
        if($goal == null){
            $maingoal = '未記入';
            $measurable = '未記入';
            $actionable = '未記入';
            $competent = '未記入';
        }else{
        $maingoal = $goal->first(['maingoal'])->toArray();
        if(!isset($maingoal['maingoal'])){
        $maingoal['maingoal'] = "未記入";
        } 
        
        $measurable = $goal->first(['measurable'])->toArray();
        if(!isset($measurable['measurable'])){
        $measurable['measurable'] = "未記入";
        }
        
        $actionable = $goal->first(['actionable'])->toArray();
        if(!isset($actionable['actionable'])){
        $actionable['actionable'] = "未記入";
        }
        
        $competent = $goal->first(['competent'])->toArray();
        if(!isset($competent['competent'])){
        $competent['competent'] = "未記入";
        }
        }
        

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




 



 