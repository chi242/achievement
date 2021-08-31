<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Goal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;

use Auth;



class PlanlistController extends Controller
{
    public function index(Plan $plan)
    {
        $plans = \App\Models\Plan::where('user_id',Auth::id())->orderby('selected_date','desc')->orderby('id','desc')->get();
        // dd($plans);
        return view('planlist/index',['plans' => $plans]);
    }

    public function edit(Plan $plan)
    {
        if(isset($plan['selected_date'])){
            $plan = App\Models\Plan::where('user_id',Auth::id())->orderby('id','desc')->first();
        }
        return view('planlist/edit',['plan' => $plan]);
    }
    public function show(Plan $plan)
    {
        return view('planlist/show',['plan' => $plan]);
    }
}

