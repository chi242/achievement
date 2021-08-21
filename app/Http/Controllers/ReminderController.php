<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;




class ReminderController extends Controller
{
    
    public function index()
    {
        $plan = \App\Models\Plan::where('user_id',Auth::id());

        return view('reminder/index',['plan' => $plan]);
    }
}