<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\ReflectionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class Reflection_pageController extends Controller
{
    public function create(Plan $plan)
     {
        return view('reflection_page/create')->with(['plan' => $plan]);
    }
    
    public function store(Request $request,Plan $plan)
    {   
        $plans = new \App\Models\Plan();
        
        $plans->reflection_start_time = $request->reflection_start_time;
        $plans->reflection_times = $request->reflection_times;
        $plans->save();
        // $input = $request['reflection_page'];
        // $reflection_page->fill($input)->save();
        //  $reflection = reflection::find($request->id);
        //  $reflection->fill($request->all())->save();
        return redirect('/planlists/' . $plan->id);
        
    }
    
    public function show(plan $plan)
    {
        return view('reflection_page/show')->with(['reflection' => $reflection])->with(['plan' => $plan]);
    }
     
    public function edit()
    {
        $reflection = reflection::all();
        return view('reflection_page/edit',['reflection'-> $reflection]);
    }
    
    public function update(Request $request)
    {

        $input= $request['reflection'];
        $reflection->fill($input)->save();
        return redirect('/planlists/' . $reflection->id); 
    }
    
    public function delete(Reflection $reflection){
        $reflection->delete();
        return redirect('reflection_pages/create');
    }
    
    
}
