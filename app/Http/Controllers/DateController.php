<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Plan;
use App\Models\Date;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class DateController extends Controller
{
    
    public function store(Request $request,Date $date)
    {
        $date = new \App\Models\Date;
        $date->selected_at = $request->selected_at;
        // $date->selected_at = '2021-08-10';
        // $request->selected_at;
        $date->save();
        return redirect('plans/create');
    }
}


 

