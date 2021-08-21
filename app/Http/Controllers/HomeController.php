<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Goal;
use App\Models\Date;
use App\Models\Execution;
use Auth;

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
    public static function index(Goal $goal)
    {
        return view('index')->with(['goal' => $goal->orderby('id','desc')->first()]);
        
    }
    
    public function getLogout(){
      Auth::logout();
      return redirect('/login');
    }
    
    
    
}

