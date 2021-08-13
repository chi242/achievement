<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Goal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class PlanlistController extends Controller
{
    public function index(Plan $plan,Goal $goal)
    {
        $plan = Plan::select('id','plan_content','plan_start_time','plan_times','selected_date')->orderBy('selected_date','desc')->first();
        if($plan){
                
        }
        
        return view('planlist/index',['plan' => $plan]);
        // ->with(['goal' => $goal->orderby('id','desc')->first()])->with(['plan' => $plan->get()]);
    }

    public function edit(Plan $plan)
    {
        return view('planlist/edit',['plan' => $plan]);
    }
    public function show(Plan $plan)
    {
        return view('planlist/show',['plan' => $plan]);
    }
}