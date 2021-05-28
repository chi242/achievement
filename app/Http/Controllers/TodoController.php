<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function create(Todo $todo)
     {
        return view('todo/create')->with(['todo' => $todo]);
    }
    
    public function store(Request $request,Todo $todo)
    {   
        $input = $request['todo'];
        $todo->fill($input)->save();
        return redirect('/todos/' . $todo->id);
    }
     
    public function show(Todo $todo)
    {   
        return view('todo/show')->with(['todo' => $todo]);
    }
     
    public function edit(Todo $todo)
    {
        return view('todo/edit')->with(['todo' => $todo]);
    }
    
    public function update(Request $request,Todo $todo)
    {
        $input= $request['todo'];
        $todo->fill($input)->save();
        // return $todo;
        return redirect('/todos/' . $todo->id); 
    }
   
    
    public function delete(Todo $todo){
        $todo->delete();
        return redirect('todos/create');
    }
    
    
}
