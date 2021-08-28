<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\PlanRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;



class Reflection_pageController extends Controller
{
    public function create(Plan $plan)
     {
        return view('reflection_page/create')->with(['plan' => $plan]);
    }
    
    public function store(Request $request,Plan $plan)
    {   
        $plans = \App\Models\Plan::orderby('id','desc')->first();
        $plans->user_id = Auth::user()->id;
        $plans->reflection_content = $request->reflection_content;
        $plans->reflection_start_time = $request->reflection_start_time;
        $plans->reflection_times = $request->reflection_times;
        $plans->status = $request->status;
        $plans->save();
        
        return redirect('/planlists/' . $plan->id);
        
    }
    
    public function show(Plan $plan)
    {
        $plans = \App\Models\Plan::orderby('id','desc')->first();;
        return view('reflection_page/show')->with(['plan' => $plan]);
    }
     
    public function edit(Plan $plan)
    {
        $reflection = reflection::all();
        return view('reflection_page/edit',['plan'-> $plan]);
    }
    
    public function update(Request $request)
    {
        $input= $request['reflection'];
        $reflection->fill($input)->save();
        return redirect('/planlists/' . $reflection->id); 
    }
    
    public function delete(Plan $plan){
        $plan->delete();
        return redirect('reflection_pages/create');
    }
    
    
}
