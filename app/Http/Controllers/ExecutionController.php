<?php

namespace App\Http\Controllers;

use App\Models\Execution;
use App\Models\Plan;
use App\Http\Requests\ExecutionRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\planController;
use Illuminate\Http\Request;



class ExecutionController extends Controller
{
    public function create(Plan $plan)
     {
        return view('execution/create')->with(['plan' => $plan]);
    }
    
    public function store(Request $request, Execution $execution)
    {   
    
        $input = $request['execution'];
        $execution->fill($input)->save();
        //  $execution = execution::find($request->id);
        //  $execution->fill($request->all())->save();
        return redirect('/planlists/' . $execution->id);
        
    }
    
    public function show(Execution $execution, plan $plan)
    {
        return view('execution/show')->with(['execution' => $execution])->with(['plan' => $plan]);
    }
     
    public function edit(Execution $execution)
    {
        $execution = Execution::all();
        return view('execution/edit',['execution'-> $execution]);
    }
    
    public function update(Request $request, Execution $execution)
    {

        $input= $request['execution'];
        $execution->fill($input)->save();
        return redirect('/planlists/' . $execution->id); 
    }
    
    public function delete(Execution $execution){
        $execution->delete();
        return redirect('executions/create');
    }
    
    
}
