<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class ReminderController extends Controller
{
    
    public function index()
    {
        return view('reminder/index');
    }
}