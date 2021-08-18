<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;




class Selected_dateController extends Controller
{
    
    public function store(Request $request,Plan $plan)
    {
        $plans = new \App\Models\Plan;
        $plans->user_id = Auth::user()->id;
        $plans->selected_date = $request->selected_date;
        $plans->save();
        
        return redirect('plans/create')->with(['plan' => $plan]);
    }

    
}


 
