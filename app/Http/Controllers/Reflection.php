<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\ReflectionRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ReflectionController extends Controller
{
    public function create(Plan $plan)
     {
        return view('reflection/create')->with(['plan' => $plan]);
    }
    
    public function store(Request $request, Reflection $reflection)
    {   
    
        $input = $request['reflection'];
        $reflection->fill($input)->save();
        //  $reflection = reflection::find($request->id);
        //  $reflection->fill($request->all())->save();
        return redirect('/planlists/' . $reflection->id);
        
    }
    
    public function show(Reflection $reflection, plan $plan)
    {
        return view('reflection/show')->with(['reflection' => $reflection])->with(['plan' => $plan]);
    }
     
    public function edit(Reflection $reflection)
    {
        $reflection = reflection::all();
        return view('reflection/edit',['reflection'-> $reflection]);
    }
    
    public function update(Request $request, Reflection $reflection)
    {

        $input= $request['reflection'];
        $reflection->fill($input)->save();
        return redirect('/planlists/' . $reflection->id); 
    }
    
    public function delete(Reflection $reflection){
        $reflection->delete();
        return redirect('reflections/create');
    }
    
    
}
