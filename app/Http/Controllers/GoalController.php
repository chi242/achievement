<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\Plan;
use App\Http\Requests\DiaryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;




class GoalController extends Controller
{
    
    public function index(Goal $goal)
    {
        $plans = Plan::where('user\id',Auth::user()->id)->orderBy('selected_date','desc');
        
        return view('goal/index')->with(['goal' => $goal->orderby('id','desc')->first()]);
    }
    
    public function create(Goal $goal)
    {
        return view('goal/create');
    }
    
    public function store(Request $request , Goal $goal)
    {   
        $input = $request['goal'];
        $goal->fill($input)->save();
        return redirect('/goals');
        
    }
  
    
}




 



 