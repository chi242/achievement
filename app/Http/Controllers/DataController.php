<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;




class DataController extends Controller
{
    
    public function index(Plan $plan)
    {
        $plans = Plan::where('user\id',Auth::user()->id)->orderBy('selected_date','desc');
        
        return view('data/index')->with(['plan' => $plan->orderby('selected_date','desc')->orderby('id','desc')->get()]);
    }
}