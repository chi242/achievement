<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\PlanRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PlanController extends Controller
{
    public function index(Plan $plan ,Goal $goal)
    {
        return view('plan/index')->with(['plan' => $plan]);
    }
    public function create(Plan $plan)
     {
        return view('plan/create')->with(['plan' => $plan]);
    }
    
    public function store(Request $request,Plan $plan,Date $date)
    {   
        $input = $request['plan'];
        $plan->fill($input)->save();
        return redirect('/');
    }
     
    public function show(Plan $plan)
    {   
        return view('plan/show')->with(['plan' => $plan]);
    }
     
    public function edit(Plan $plan)
    {
        return view('plan/edit')->with(['plan' => $plan]);
    }
    
    public function update(Request $request,Plan $plan)
    {
        $input= $request['plan'];
        $plan->fill($input)->save();
        // return $plan;
        return redirect('/'); 
    }
   
    
    public function delete(Plan $plan){
        $plan->delete();
        return redirect('plans/create');
    }
    
    
}
