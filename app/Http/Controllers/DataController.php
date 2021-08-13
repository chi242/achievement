<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class DataController extends Controller
{
    
    public function index(Plan $plan)
    {
        return view('data/index')->with(['plan' => $plan->orderby('selected_date','desc')->orderby('id','desc')->first()]);
    }
}