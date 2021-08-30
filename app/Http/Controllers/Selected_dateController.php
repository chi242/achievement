<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;




class Selected_dateController extends Controller
{
    
    public function store(Request $request,Plan $plan)
    {
        $plans = new \App\Models\Plan;
        $plans->user_id = Auth::id();
        $plans->selected_date = $request->selected_date;
        $plans->save();
        
        $plan = Plan::where('user_id',Auth::id())->orderby('id','desc')->first();
        
        return view('plan/create',['plan' => $plan]);
    }

    
}


 

