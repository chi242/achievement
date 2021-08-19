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
        $plan = Plan::where('user_id',Auth::user()->id)->orderBy('selected_date','desc');
    
        // return view('data/index', ['plans' => $plans]);
        
        // $plans = Plan::query()->where('user_id',Auth::user()->id)->orderBy('selected_date','desc')->paginate(5)->get();
        
        return view('data/index')->with(['plan' => $plan->orderby('selected_date','desc')->orderby('id','desc')->get()]);
    }   
}