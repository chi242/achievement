<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use Illuminate\Pagination\LengthAwarePaginator;




class DataController extends Controller
{
    
    public function index(Plan $plan)
    {
        $plan = \App\Models\Plan::where('user_id',Auth::user()->id);
        
        return view('data/index')->with(['plan' => $plan->orderby('selected_date','desc')->orderby('id','desc')->get()]);
        
    
        // return view('data/index', ['plans' => $plans]);
        
        // $plans = Plan::query()->where('user_id',Auth::user()->id)->orderBy('selected_date','desc')->paginate(5)->get();
        
    }
}