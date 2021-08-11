<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Goal;
use App\Models\Date;
use App\Models\Execution;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public static function index(Goal $goal,Plan $plan,Execution $execution,Date $date)
    {
        return view('index')->with(['goal' => $goal->orderby('id','desc')->first()])->with(['plan' => $plan,'date' => $date->first()]);
        
        
        $totalNumbers = DB::table('plans_table')->count('plan_content')->get();
        
        $achievementNumbers = DB::table('executions_table')-> count('achivement_rate')->get();
    }
    
    
}

