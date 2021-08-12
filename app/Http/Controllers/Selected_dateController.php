<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class Selected_dateController extends Controller
{
    
    public function store(Request $request)
    {
        $selected_date = new \App\Models\Plan;
        $selected_date->selected_date = $request->selected_date;
        // $date->selected_at = '2021-08-10';
        // $request->selected_at;
        $selected_date->save();
        return redirect('plans/create');
    }
}


 

