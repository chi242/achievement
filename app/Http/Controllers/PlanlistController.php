<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Goal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;



class PlanlistController extends Controller
{
    public function index(Plan $plan)
    {
        $plan = \App\Models\Plan::where('user_id',Auth::id());
        
        return view('planlist/index')->with(['plan' => $plan->orderby('selected_date','desc')->orderby('id','desc')->get()]);
        
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