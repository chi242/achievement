<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;





class Analysis_pageController extends Controller
{
    
    public function index(Plan $plan)
    {
        
        return view('analysis_page/index')->with(['plan' => $plan->where('user_id',Auth::id())->orderby('selected_date','desc')->orderby('id','desc')->get()]);

        
    }
}